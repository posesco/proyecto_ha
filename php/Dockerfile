# Contenedor efimero para traer libreria con composer
FROM composer:latest as librerias
RUN composer require spipu/html2pdf
# Contenedor final con solo librerias importadas
FROM php:7.4-fpm
# Instalacion de paquetes necesarios
RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \ 
    libssh2-1-dev \
    openssh-client \
    openssh-server \
    rsyslog \
    keepalived \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install mysqli
# Forzar la instalacion de paquetes redis y ssh2 desde docker-php-ext-install y activacion de modulos php
RUN mkdir -p /usr/src/php/ext
RUN curl -L -o redis.tar.gz https://github.com/phpredis/phpredis/archive/5.3.1.tar.gz \
    && curl -L -o ssh2.tar.gz https://github.com/php/pecl-networking-ssh2/archive/RELEASE_1_2.tar.gz \
    && tar zxf redis.tar.gz \
    && tar zxf ssh2.tar.gz \
    && mv phpredis-5.3.1 /usr/src/php/ext/redis \
    && mv pecl-networking-ssh2-RELEASE_1_2 /usr/src/php/ext/ssh2 \
    && rm *.tar.gz \
    && docker-php-ext-install redis \
    && docker-php-ext-install ssh2 \
    && pecl install mongodb \
    && echo "extension=mongo.so" > /usr/local/etc/php/conf.d/docker-php-ext-mongo.ini \ 
    && docker-php-ext-enable mysqli \
    && docker-php-ext-enable redis \
    && docker-php-ext-enable ssh2 \
    && docker-php-ext-enable mongodb \
    && sed -i 's/^\(module.*imklog.*\)/# \1/g' /etc/rsyslog.conf \
    && apt-get autoremove -y
COPY --from=librerias /app /tmp    
# Rutina que activa procesos para ip flotante
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "/entrypoint.sh" ]
CMD ["php-fpm"]