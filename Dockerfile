# Usa una imagen base con PHP 8.2
FROM php:8.2-cli

# Instala dependencias del sistema y herramientas necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Instala Node.js 18 y Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copia el código de la aplicación
COPY . /app

# Establece el directorio de trabajo
WORKDIR /app

# Instala dependencias de Composer
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install

# Instala dependencias de Yarn y construye los assets
RUN yarn && yarn build

# Limpia la caché de rutas de Laravel
RUN php artisan route:clear

# Ejecuta comandos de optimización de Laravel
RUN php artisan optimize && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force


