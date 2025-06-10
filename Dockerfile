# Use official PHP 8.2 with Apache
FROM php:8.2-apache

# Install PHP extensions (like mysqli)
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite for .htaccess support
RUN a2enmod rewrite

# Allow .htaccess files to override config
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Suppress Apache FQDN warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Create PHP session directory and ensure it's writable
RUN mkdir -p /var/lib/php/sessions \
  && chown -R www-data:www-data /var/lib/php/sessions \
  && chmod 700 /var/lib/php/sessions

# Set PHP session path via custom php.ini
COPY php.ini /usr/local/etc/php/

# Copy your app code into the Apache web root
COPY . /var/www/html/

# Ensure correct permissions for Apache
RUN chown -R www-data:www-data /var/www/html
