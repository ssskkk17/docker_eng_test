FROM php:8.1.18-fpm
FROM nginx:latest

ADD ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf
ADD ./src /usr/share/nginx/html

COPY ./php.ini /usr/local/etc/php

RUN apt-get update && apt-get install -y\
    git \
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www