FROM php:7.3-fpm-alpine

WORKDIR /var/www

RUN apk update && apk add \
    build-base \
    vim

RUN docker-php-ext-install pdo_mysql

RUN addgroup -g 1000 -s www && \
    adduser -u 1000 -s www -G www 

USER www

COPY --chown=www:wwww . /var/www 

EXPOSE 9000