# Usa una imagen base oficial de PHP con el servidor web Apache
FROM php:8.2-apache

# Instala las dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el archivo composer.json y composer.lock
COPY composer.json composer.lock ./

# Instala las dependencias de PHP con Composer
RUN composer install --no-autoloader --no-scripts

# Copia el resto del código fuente de la aplicación
COPY . .

# Genera el autoload y limpia el caché
RUN composer dump-autoload \
    && php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan config:cache

# Expone el puerto 80 para el contenedor
EXPOSE 80

# Configura el contenedor para usar el servidor web Apache
CMD ["apache2-foreground"]
