FROM php:8.1-fpm

WORKDIR /app

RUN docker-php-ext-install pdo_mysql