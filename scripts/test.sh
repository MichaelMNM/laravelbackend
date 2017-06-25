#!/usr/bin/env bash

chmod -R 777 /var/www/storage

# Install laravel dependencies
composer install

# Generate .env file
composer run-script post-root-package-install

# Create an application key
php artisan key:generate

# Migrate database
php artisan migrate

# Execute PID 1 command
exec $@
