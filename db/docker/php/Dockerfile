FROM php:8-fpm

# install composer
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim 

RUN apt-get update \
&& apt-get install -y libpq-dev \
&& docker-php-ext-install pdo_mysql pdo_pgsql

COPY --from=composer /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html
