# Dockerfile
FROM php:8.4-cli

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
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

WORKDIR /app

# Copiar arquivos de configuração
COPY composer.json composer.lock ./

# Instalar dependências
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copiar todo o projeto
COPY . .

# Criar arquivo .env a partir do .env.example se não existir
RUN if [ ! -f .env ]; then \
    if [ -f .env.example ]; then \
    cp .env.example .env; \
    else \
    echo "APP_NAME=Laravel" > .env && \
    echo "APP_ENV=production" >> .env && \
    echo "APP_KEY=" >> .env && \
    echo "APP_DEBUG=false" >> .env && \
    echo "APP_URL=${RAILWAY_PUBLIC_DOMAIN}" >> .env; \
    fi \
    fi

# Gerar chave da aplicação
RUN php artisan key:generate --force

# Cache de configurações (deve vir DEPOIS do .env)
RUN php artisan config:cache || true && \
    php artisan route:cache || true && \
    php artisan view:cache || true

# Script de entrada
RUN echo '#!/bin/bash\n\
if [ ! -f .env ]; then cp .env.example .env 2>/dev/null || true; fi\n\
php artisan migrate --force --no-interaction\n\
exec php artisan serve --host=0.0.0.0 --port=$PORT\n\
' > /start.sh && chmod +x /start.sh

EXPOSE 8080

CMD ["/start.sh"]