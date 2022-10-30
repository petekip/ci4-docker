#Import the image with basic ubuntu system and php along with extensions installed.
FROM php:8.1-apache

# Copy local code to the container image.
COPY . /var/www/html/

RUN apt-get update && \
    apt-get install -y
RUN apt-get install -y curl
RUN apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath
RUN apt-get install -y build-essential libssl-dev zlib1g-dev libpng-dev libjpeg-dev libfreetype6-dev
RUN apt-get install -y libicu-dev

RUN apt-get update
RUN docker-php-ext-install intl
RUN docker-php-ext-configure intl
RUN a2enmod rewrite

# Restart apache2
RUN service apache2 restart

# Use the PORT environment variable in Apache configuration files.
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf


# Authorise .htaccess files
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install Composer
COPY . .
COPY composer.json ./
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --no-autoloader

RUN chmod -R 0777 /var/www/html/writable

#RUN composer install --no-scripts --no-autoloader

#RUN chmod +x artisan

#RUN composer dump-autoload --optimize && composer run-script post-install-cmd



#RUN chown -R www-data:www-data storage bootstrap
#RUN chmod -R 777 storage bootstrap