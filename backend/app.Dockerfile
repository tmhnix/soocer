FROM node:8-alpine As build

ENV NODE_ENV=development

WORKDIR /usr/src/app

COPY package.json ./

RUN apk update && apk upgrade && \
    apk add --no-cache bash git openssh php7-session

#RUN npm install


COPY . /usr/src/app

RUN npm run build

## Laravel
FROM php:7.2-fpm As release

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

#COPY --from=build /usr/src/app/public ./public

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    postgresql-server-dev-all \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

RUN chmod -R 777 /var/www/storage/logs
RUN chmod -R 777 /var/www/storage/app
RUN chmod -R 777 /var/www/storage/framework
RUN chmod -R 777 /var/www/bootstrap/cache

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
