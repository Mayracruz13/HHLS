# Usa una imagen base con PHP y Composer preinstalados
FROM php:8.1-cli

# Instala Node.js y Yarn
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn

# Instala dependencias de sistema necesarias (si es necesario)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Copia el código de la aplicación
COPY . /app

# Establece el directorio de trabajo
WORKDIR /app

# Instala dependencias de Composer
RUN composer install

# Instala dependencias de Yarn y construye los assets
RUN yarn && yarn build

# Ejecuta comandos de optimización de Laravel
RUN php artisan optimize && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force


