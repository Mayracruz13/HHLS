# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Instala dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    libicu-dev \
    libxml2-dev \
    libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia el archivo composer.lock y composer.json
COPY composer.json composer.lock ./

# Instala las dependencias de PHP con Composer
RUN composer install --no-autoloader --no-scripts

# Copia el resto del código fuente de la aplicación
COPY . .

# Genera el autoload y limpia el caché
RUN composer dump-autoload \
    && php artisan route:clear \
    && php artisan config:clear \
    && php artisan cache:clear

# Exponer el puerto 80 para la web
EXPOSE 80

# Establece el comando por defecto
CMD ["apache2-foreground"]
