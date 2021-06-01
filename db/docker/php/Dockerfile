FROM php:8-fpm

# install composer
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim

COPY --from=composer /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html