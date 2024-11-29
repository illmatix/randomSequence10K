# Use an official PHP image with Apache
FROM php:8.2-apache

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    libxml2-dev \
    && docker-php-ext-install zip dom xml

RUN pecl install pcov && docker-php-ext-enable pcov

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy project files into the container
COPY . .

# Set proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for Apache
EXPOSE 80
