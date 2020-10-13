FROM php:7.4-fpm
RUN apt-get update && \
    apt-get install --no-install-recommends --no-install-suggests -y \
        libfreetype6-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \ 
        libssh2-1-dev \
        inetutils-ping \
        iproute2 \
        keepalived
RUN docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli
RUN mkdir -p /usr/src/php/ext
RUN curl -L -o redis.tar.gz https://github.com/phpredis/phpredis/archive/5.3.1.tar.gz \
       && curl -L -o ssh2.tar.gz https://github.com/php/pecl-networking-ssh2/archive/RELEASE_1_2.tar.gz \
       && tar zxf redis.tar.gz \
       && tar zxf ssh2.tar.gz \
       && mv phpredis-5.3.1 /usr/src/php/ext/redis \
       && mv pecl-networking-ssh2-RELEASE_1_2 /usr/src/php/ext/ssh2 \
       && docker-php-ext-install redis \
       && docker-php-ext-install ssh2 \
       && docker-php-ext-enable redis \
       && docker-php-ext-enable ssh2 \
       && pecl install mongodb \
       && echo "extension=mongo.so" > /usr/local/etc/php/conf.d/docker-php-ext-mongo.ini \ 
       && docker-php-ext-enable mongodb
RUN apt-get autoremove -y
EXPOSE 9000