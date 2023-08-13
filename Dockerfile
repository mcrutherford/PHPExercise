# Start from a PHP 8.1 Apache image
FROM php:8.1-apache

# Copy the src code to the image
COPY src/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/