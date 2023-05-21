FROM php:8.1-apache

RUN apt update \
        && apt install -y \
            g++ \
            libicu-dev \
            libpq-dev \
            libzip-dev \
            zip \
            zlib1g-dev \
        && docker-php-ext-install \
            intl \
            opcache \
            pdo \
            pdo_mysql 

WORKDIR /var/www/project-laravel-docker
COPY ./laravel/ /var/www/project-laravel-docker

RUN a2enmod rewrite
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
