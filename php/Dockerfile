FROM php:7.4-fpm
RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev     
RUN docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli
RUN mkdir -p /usr/src/php/ext
RUN curl -L -o redis.tar.gz https://github.com/phpredis/phpredis/archive/5.3.1.tar.gz \
       && tar zxf redis.tar.gz \
       && mv phpredis-5.3.1 /usr/src/php/ext/redis \
       && docker-php-ext-install redis \
       && docker-php-ext-enable redis \
       && pecl install mongodb \
       && echo "extension=mongo.so" > /usr/local/etc/php/conf.d/docker-php-ext-mongo.ini \ 
       && docker-php-ext-enable mongodb
EXPOSE 9000
