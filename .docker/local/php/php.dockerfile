FROM php:8.4-fpm-alpine

WORKDIR /var/www/html
# Copy custom php.ini
COPY php.ini /usr/local/etc/php/php.ini
RUN apk add --no-cache \    
    autoconf build-base linux-headers \
    libzip-dev libmemcached-dev libmcrypt-dev \
    libzip-dev libpng-dev libjpeg-turbo-dev libwebp-dev libxml2-dev \
    libxslt-dev zlib-dev oniguruma-dev icu-dev gmp-dev postgresql-dev \
    curl git unzip \
 && docker-php-ext-configure gd --with-jpeg --with-webp \
 && docker-php-ext-install gd pdo pdo_mysql pdo_pgsql mbstring zip exif pcntl bcmath intl

RUN rm -rf /var/cache/apk/*

# Install Xdebug
RUN pecl install xdebug && \
  docker-php-ext-enable xdebug

# Configure Xdebug (base configuration)
RUN { \
  echo "xdebug.mode=debug,develop,profile,trace,coverage"; \
  echo "xdebug.output_dir=/tmp/xdebug"; \
  echo "xdebug.profiler_output_name=cachegrind.out.%p"; \
  echo "xdebug.start_with_request=trigger"; \
  echo "xdebug.trigger_value=profileme"; \
  } >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apk add --no-cache shadow

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
 && chown -R www-data:www-data /var/www/html \
 && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
USER www-data
CMD ["php-fpm", "-F"]
