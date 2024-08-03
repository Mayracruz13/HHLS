# Usa una imagen base con PHP 8.2
FROM php:8.2-cli

# Instala las extensiones necesarias de PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www

# Copia el archivo de dependencias y los archivos del proyecto
COPY composer.json composer.lock ./
RUN composer install --no-scripts --no-autoloader

# Copia el resto de los archivos del proyecto, incluyendo el archivo .env
COPY . .

# Verifica el contenido del archivo .env
RUN cat .env

# Genera el autoload y limpia el caché
RUN composer dump-autoload && \
    php artisan config:cache && \
    php artisan route:clear && \
    php artisan config:clear && \
    php artisan cache:clear

# Instala dependencias de Node.js (si usas Yarn o npm)
RUN apt-get install -y \
    nodejs \
    npm \
    && npm install -g yarn

# Instala dependencias de Yarn y construye los assets
RUN yarn install && yarn build

# Ejecuta comandos de optimización de Laravel
RUN php artisan optimize && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force

# Expone el puerto 8000 para la aplicación Laravel
EXPOSE 8000

# Comando para iniciar el servidor
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
