FROM php:8.1.18-fpm

COPY ./php.ini /usr/local/etc/php
COPY --from=nginx:latest /etc/nginx /etc/nginx
COPY --from=nginx:latest /usr/sbin/nginx /usr/sbin/nginx

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql
    
WORKDIR /var/www