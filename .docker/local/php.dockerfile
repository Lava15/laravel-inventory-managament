FROM php:8.4-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
    libzip-dev libpng-dev libjpeg-turbo-dev libwebp-dev libxml2-dev \
    libxslt-dev zlib-dev oniguruma-dev icu-dev gmp-dev postgresql-dev \
    curl git unzip \
 && docker-php-ext-configure gd --with-jpeg --with-webp \
 && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath intl

RUN rm -rf /var/cache/apk/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

USER www-data

CMD ["php-fpm", "-F"]
