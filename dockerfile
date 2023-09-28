FROM php:8.1-fpm-alpine

USER root

WORKDIR /var/www/html


# apk add bash
RUN apk --no-cache add \
    wget \
    libssh2 libssh2-dev libssh2-static \
    git \
    nginx \
    openssl curl-dev\
    ca-certificates \
    supervisor \
    bash \
    nano \
    libxml2-dev \
    postgresql-libs\
    --virtual .build-deps gcc musl-dev postgresql-dev \
    && docker-php-ext-install \
    curl \
    pgsql \
    pdo_pgsql


COPY . /var/www/html
COPY ./.env /var/www/html/.env

RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# WORKDIR /app
# COPY . .
RUN composer install

EXPOSE 80 443