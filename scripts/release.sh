#!/usr/bin/env bash

mkdir /var/www/laravel

tar -xf /var/deploy/archive.tar.gz -C /var/www/laravel --strip 1

cd /var/www/laravel/public

chmod -R 777 /var/www/laravel/storage
chmod -R 777 /var/www/laravel/bootstrap/cache

pwd

rm -rf /var/deploy

cd /var/www/laravel

exec $@