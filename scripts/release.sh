#!/usr/bin/env bash

tar -xf /var/deploy/archive.tar.gz -C /var/www/laravel --strip 1

cd /var/www/laravel/public

chmod -R 777 /var/www/laravel/storage

pwd

rm -rf /var/deploy

exec $@