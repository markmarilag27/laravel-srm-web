#!/bin/sh

artisan="
npm install
composer install
php artisan telescope:install
php artisan migrate
"

docker-compose up -d
docker-compose exec -u www-data app sh -c "$artisan"
