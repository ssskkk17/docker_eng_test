FROM php:8.1.18-fpm

COPY ./php.ini /usr/local/etc/php
COPY ./src:/var/www/html

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql
    
WORKDIR /var/www