# Dockerfile (versão otimizada)
FROM php:8.4-cli

# Instalar dependências do sistema e extensões PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install \
    pdo \
    pdo_pgsql \
    pgsql \
    mbstring \
    xml \
    pcntl \
    posix \
    && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copiar apenas arquivos necessários para instalação
COPY composer.json composer.lock ./

# Instalar dependências
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copiar resto da aplicação
COPY . .

# Gerar chave e otimizar
RUN php artisan key:generate --force && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Script de entrada
RUN echo '#!/bin/bash\n\
php artisan migrate --force --no-interaction\n\
exec php artisan serve --host=0.0.0.0 --port=$PORT\n\
' > /start.sh && chmod +x /start.sh

EXPOSE 8080

CMD ["/start.sh"]