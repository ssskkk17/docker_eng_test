FROM php:8.1.18-fpm
FROM nginx:1.25.0

COPY ./php.ini /usr/local/etc/php
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

ADD ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql