# Imagen base con PHP 8.3 y FPM
FROM php:8.3-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev
# Instala extensiones necesarias para Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath zip

# Copia Composer desde la imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www

# Copia el proyecto
COPY . .

# Instala dependencias de Laravel
RUN composer install

# Permisos para Laravel
RUN chown -R www-data:www-data /var/www

# Puerto utilizado por PHP-FPM
EXPOSE 9000

# Inicia PHP-FPM
CMD ["php-fpm"]
