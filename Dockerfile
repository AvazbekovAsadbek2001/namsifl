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

# PHP sozlamalari
RUN echo "upload_max_filesize = 500M" > /usr/local/etc/php/conf.d/uploads.ini && \
    echo "post_max_size = 500M" >> /usr/local/etc/php/conf.d/uploads.ini && \
    echo "memory_limit = 1000M" >> /usr/local/etc/php/conf.d/uploads.ini

# Ishchi papka
WORKDIR /var/www/src

# Laravel fayllarini konteynerga nusxalash
COPY . /var/www/src

# Zarur papkalarni yaratish va ruxsat berish
RUN mkdir -p storage bootstrap/cache && \
    chown -R www-data:www-data /var/www/src && \
    chmod -R 775 storage bootstrap/cache

CMD ["php-fpm"]
