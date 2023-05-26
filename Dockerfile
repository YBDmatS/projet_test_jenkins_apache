FROM php:8.2-apache

RUN docker-php-ext-install mysqli && \
    docker-php-ext-install pdo && \
    docker-php-ext-install pdo_mysql

RUN service apache2 restart

#VOLUME . /var/www/html

COPY index.php /var/www/html