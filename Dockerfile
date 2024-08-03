# Usa una imagen base con PHP y Composer
FROM php:8.2-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    libmysqlclient-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos de Composer
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

# Exponer el puerto 9000
EXPOSE 9000

# Comando por defecto
CMD ["php-fpm"]
