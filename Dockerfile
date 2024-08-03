# Usa una imagen base oficial de PHP
FROM php:8.2-fpm

# Instala las dependencias y extensiones necesarias
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

# Copia el código fuente de tu aplicación al contenedor
COPY . /var/www

# Establece el directorio de trabajo
WORKDIR /var/www

# Instala Composer (gestor de dependencias para PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de PHP usando Composer
RUN composer install --no-dev --optimize-autoloader

# Genera el autoload y limpia el caché
RUN composer dump-autoload \
    && php artisan route:clear \
    && php artisan config:clear \
    && php artisan cache:clear

# Expone el puerto en el que PHP-FPM escucha
EXPOSE 9000

# Configura el comando para iniciar PHP-FPM
CMD ["php-fpm"]
