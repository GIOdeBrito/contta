# Use the official PHP 8.1 image with Apache
FROM php:8.4-apache

COPY . /var/www/html/

RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Expose port 80
EXPOSE 80