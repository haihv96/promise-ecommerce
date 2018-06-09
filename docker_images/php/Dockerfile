FROM php:7.2-apache
RUN a2enmod rewrite
RUN apt-get update && apt-get install -y zlib1g-dev \
    && docker-php-ext-install zip
RUN curl --silent --show-error https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN apt-get update && apt-get install -my wget gnupg
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install -y nodejs
RUN apt-get install -y gcc make libpng-dev
RUN apt-get install -y build-essential
RUN apt-get install -y git
