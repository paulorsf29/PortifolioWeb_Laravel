# Dockerfile
FROM php:8.4-cli

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensões PHP necessárias
RUN docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    mbstring \
    xml \
    pcntl \
    posix

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /app

# Copiar arquivos de configuração primeiro (para cache do Docker)
COPY composer.json composer.lock ./

# Instalar dependências (sem scripts para evitar erros)
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copiar o resto dos arquivos
COPY . .

# Gerar chave da aplicação
RUN php artisan key:generate --force

# Criar script de entrada
RUN echo '#!/bin/bash\n\
php artisan migrate --force --no-interaction\n\
php artisan serve --host=0.0.0.0 --port=$PORT\n\
' > /start.sh && chmod +x /start.sh

# Expor porta
EXPOSE 8080

# Comando de inicialização
CMD ["/start.sh"]