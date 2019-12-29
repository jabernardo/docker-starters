FROM php:7.0-apache

# Copy files to /var/www/html
ADD ./www /var/www/html

# Install vim and common php libs
RUN apt update && apt install vim libz-dev libmcrypt-dev libmemcached-dev -y

# Intall memcached from pecl other php ext through `docker-php-ext-install`
RUN pecl install memcached &&\
    docker-php-ext-enable memcached &&\
    docker-php-ext-install mysqli mcrypt

# Enable php for apache
RUN a2enmod rewrite

# Expose ports
EXPOSE 80