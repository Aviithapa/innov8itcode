#!/bin/sh

# Change to the project directory. 
cd ~/public_html

# Pull the latest changes from the git repository
git pull origin main

cd /home/innov8itcode/public_html

# Install/update composer dependencies
composer install --no-interaction --optimize-autoloader

# Run database migrations
php artisan migrate --force

# Clear caches
php artisan cache:clear

# Clear and cache routes
php artisan route:cache

# Clear and cache config
php artisan config:cache

# Clear and cache views
php artisan view:cache


# Create symlink for storage
php artisan storage:link

# Set appropriate permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache

