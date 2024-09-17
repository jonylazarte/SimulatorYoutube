FROM php:8.1-fpm

# Instalar extensiones PHP
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer   


# Copiar código de la aplicación
COPY . /var/www/html

# Instalar dependencias de Composer
WORKDIR /var/www/html
RUN composer install