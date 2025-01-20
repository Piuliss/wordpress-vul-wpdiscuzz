# Use PHP 7.4 with Apache as base image
FROM php:7.4-apache

# Install required PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    mysqli \
    pdo_mysql \
    gd \
    zip

# Enable Apache modules
RUN a2enmod rewrite

# Set recommended PHP.ini settings with increased upload limits
RUN { \
    echo 'upload_max_filesize = 128M'; \
    echo 'post_max_size = 128M'; \
    echo 'memory_limit = 256M'; \
    echo 'max_execution_time = 300'; \
    echo 'max_input_vars = 3000'; \
    echo 'max_input_time = 300'; \
} > /usr/local/etc/php/conf.d/wordpress.ini

# Modify Apache configuration to handle large files
RUN { \
    echo 'TimeOut 300'; \
    echo 'LimitRequestBody 0'; \
} > /etc/apache2/conf-available/custom.conf

RUN a2enconf custom

# Set working directory
WORKDIR /var/www/html

# Configure Apache document root
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80