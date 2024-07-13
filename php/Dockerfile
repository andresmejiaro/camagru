FROM php:7.4-fpm

# Install any necessary dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Copy your application code
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose the port php-fpm runs on
EXPOSE 9000

# Start php-fpm server
CMD ["php-fpm"]