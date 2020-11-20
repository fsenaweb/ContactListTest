FROM php:7.3-apache

RUN apt-get update && apt-get install -y apt-transport-https

#arquivo necessarios
RUN apt-get install -y \
    curl git supervisor \
    zip unzip apt-utils nano \
    zlib1g-dev libicu-dev wget gnupg g++ openssh-client libpng-dev

#extesao PHP no docker
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

RUN mkdir -p /opt/data/public && \
    rm -rf /var/www/html && \
    ln -s /opt/data/public /var/www/html

WORKDIR /var/www/html
