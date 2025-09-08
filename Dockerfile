FROM php:8.1-fpm

# Tizim bog‘liqliklarini o‘rnatish
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# PHP kengaytmalarini o‘rnatish
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Composer o‘rnatish
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ishchi papka
WORKDIR /var/www/src

# Ruxsatlarni sozlash
RUN chown -R www-data:www-data /var/www/src
RUN chmod -R 755 /var/www/src

CMD ["php-fpm"]