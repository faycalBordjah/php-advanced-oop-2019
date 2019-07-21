FROM php:7.2-apache

RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev libyaml-dev

RUN pecl install yamL

RUN usermod -u 1000 www-data

RUN a2enmod rewrite
