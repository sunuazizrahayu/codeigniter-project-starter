FROM php:7.3-fpm-alpine

RUN apk add --update && \
	apk add libpng-dev && \
	apk add libzip-dev


# Install PHP Extension
RUN docker-php-ext-install mysqli && \
	docker-php-ext-install zip && \
	docker-php-ext-install gd


#copy project files to docker
COPY . /var/www/html


# Install Composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --working-dir=. --prefer-dist --no-scripts --no-dev --no-autoloader && rm -rf /root/.composer
RUN composer dump-autoload --working-dir=. --no-scripts --no-dev --optimize


EXPOSE 80

CMD php -S 0.0.0.0:80 -t public
