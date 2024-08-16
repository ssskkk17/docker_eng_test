FROM php:latest
FROM nginx:latest
FROM ubuntu:latest

ADD ./docker/nginx/default.conf /etc/nginx/conf.d/default.conf
ADD ./src /usr/share/nginx/html

COPY ./php.ini /usr/local/etc/php

RUN cd /etc/apt/sources.list.d/
sudo sed -i.bak -e "s%http://archive.ubuntu.com/ubuntu/%http://ftp.iij.ad.jp/pub/linux/ubuntu/archive/%g" /etc/apt/sources.list

RUN apt update -y
RUN apt update && apt-get install -y\
    git \
    curl \
    zip \
    unzip \

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www