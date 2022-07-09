FROM node:lts-alpine as node
FROM php:8.1.7-fpm-alpine3.16

WORKDIR /var/www/html

RUN set -ex \
    && apk add --update --no-cache --virtual .build-deps \
    ${PHPIZE_DEPS} \
    shadow \
    tidyhtml-dev \
    icu-dev \
    libzip-dev

RUN docker-php-ext-install \
    tidy \
    intl \
    bcmath \
    pcntl \
    exif \
    zip \
    pdo_mysql

COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/node /usr/local/bin/node
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm

ENV CHROME_BIN="/usr/bin/chromium-browser" \
    PUPPETEER_SKIP_CHROMIUM_DOWNLOAD="true"

RUN apk add --update --no-cache udev ttf-freefont chromium

RUN rm -rf /var/cache/apk/* \
    && rm -rf /tmp/*

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
COPY crontab /etc/cron.d/cron

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN chmod 0644 /etc/cron.d/cron

RUN chown -R www-data:www-data .

USER www-data

EXPOSE 80

CMD php artisan serve --host=0.0.0.0 --port=80
