FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    curl \
    git \
    zip \
    unzip \
    software-properties-common \
    npm

RUN npm install npm@latest -g && \
    npm install n -g && \
    n latest

RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www
