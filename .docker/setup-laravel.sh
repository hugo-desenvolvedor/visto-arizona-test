#!/bin/bash

echo "Installing Laravel dependencies..."
docker-compose exec app composer install

echo "Generating laravel encript key..."
docker-compose exec app php artisan key:generate

echo "Migrating database..."
docker-compose exec app php artisan migrate

echo "Update permissions..."
chmod 777 -R ../storage

$SHELL