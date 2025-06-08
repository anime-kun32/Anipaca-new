FROM php:8.4-apache

# Install mysqli extension (for MySQL support)
RUN docker-php-ext-install mysqli

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy your app files to the web root
COPY . /var/www/html/

# Permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose HTTP port
EXPOSE 80
