#!/bin/sh

./vendor/bin/phpcs
./vendor/bin/phpcbf
./vendor/bin/psalm
php artisan test
