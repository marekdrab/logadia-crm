# docker/php/Dockerfile

FROM php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Copy existing application directory contents
COPY ../.. /var/www

# Set working directory
WORKDIR /var/www

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ensure permissions are set correctly
RUN chown -R www-data:www-data /var/www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
