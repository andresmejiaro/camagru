FROM php:7.4-fpm

COPY main.cf /etc/postfix/main.cf
COPY master.cf /etc/postfix/master.cf

# Install any necessary dependencies
RUN docker-php-ext-install pdo pdo_mysql && \
    DEBIAN_FRONTEND=noninteractive apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y postfix


# Set the working directory
WORKDIR /var/www/html

# Expose the port php-fpm runs on
EXPOSE 9000



# Start php-fpm server
CMD ["service postfix start && php-fpm"] 