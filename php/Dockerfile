FROM php:8.3-fpm

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY . /var/www/html

EXPOSE 9000

CMD ["php-fpm"]