FROM php:8.4-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy project files into Apache's htdocs dir
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
