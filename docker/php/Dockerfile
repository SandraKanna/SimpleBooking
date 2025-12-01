FROM php:8.3-fpm

# Extensiones necesarias
RUN apt-get update && apt-get install -y \
    git zip unzip libpq-dev libonig-dev libzip-dev \
 && docker-php-ext-install pdo pdo_pgsql

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html