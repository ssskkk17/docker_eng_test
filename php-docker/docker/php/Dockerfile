FROM php:8.1.18-fpm

COPY php.ini /php.ini

RUN apt-get update && apt-get install -y\
    git \
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql