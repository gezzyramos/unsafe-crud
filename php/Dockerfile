FROM php:7.2-apache

# PDO
# RUN docker-php-ext-install \
#             mysqli \
#             pdo \
#             pdo_mysql \
#         && docker-php-ext-enable pdo_mysql

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

COPY --from=composer:1.7.2 /usr/bin/composer /usr/bin/composer

# WORKDIR /var/www/

# COPY php-entrypoint.sh /sbin/php-entrypoint.sh

# EXPOSE 80

# ENTRYPOINT ["php-entrypoint.sh"]