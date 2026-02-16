FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

COPY docker/apache/vhost.conf /etc/apache2/sites-available/800-default.conf

COPY src/ /var/www/html/

WORKDIR /var/www/html
