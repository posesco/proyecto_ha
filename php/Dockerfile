FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        openssh-server \
        openssh-client \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql pdo mysqli \
    && docker-php-ext-enable mysqli \
    && docker-php-ext-enable pdo \
    && docker-php-ext-enable pdo_mysql
RUN mkdir -p /usr/src/php/ext
RUN curl -L -o redis.tar.gz https://github.com/phpredis/phpredis/archive/5.3.1.tar.gz \
       && tar zxf redis.tar.gz \
       && mv phpredis-5.3.1 /usr/src/php/ext/redis \
       && docker-php-ext-install redis \
       && docker-php-ext-enable redis
 
COPY ./key/ /root/.ssh/