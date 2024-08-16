FROM php:8.1.18-fpm
FROM nginx:1.25.0

ADD ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf
ADD ./src /usr/share/nginx/html

COPY ./php.ini /usr/local/etc/php
COPY . .

RUN apt-get update;
RUN apt-get install -y \
    git \
    curl \
    zip \
    unzip 
    
WORKDIR /var/www