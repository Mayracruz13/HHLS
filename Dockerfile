# Usa la imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Instala las dependencias del sistema y el cliente MySQL
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

# Copia el código fuente de la aplicación
COPY . /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Expone el puerto 80 para Apache
EXPOSE 80
