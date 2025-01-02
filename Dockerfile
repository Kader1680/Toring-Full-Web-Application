# Set the base image to use for your container
FROM php:8.2-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Set the working directory
WORKDIR /toring

# Copy composer.lock and composer.json
COPY composer.json composer.lock /toring/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the rest of your application files to the container
COPY . /toring

# Install PHP dependencies
RUN composer install

# Expose port 9000 for PHP-FPM (the port Nginx will communicate with)
EXPOSE 9000

# Start PHP-FPM server instead of Laravel's artisan serve
CMD ["php-fpm"]
