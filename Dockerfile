# Use the official PHP Apache image
FROM php:apache

# Install MySQL extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy the PHP files into the container
COPY . /var/www/html/

# Expose port 80 to the host
EXPOSE 80
