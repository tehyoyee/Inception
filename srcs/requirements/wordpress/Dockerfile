FROM debian:bullseye

RUN apt update
RUN mariadb-client wget curl php-fpm php8-cli php8-mysqli php8-phar php8-iconv sudo

# Create www-data user and assign to the existing www-data group
RUN		adduser -S -D -H -h /var/www -s /sbin/nologin -G www-data -g 'Web Server' www-data

COPY	./tools/wordpress_setup.sh /tmp/wordpress_setup.sh
COPY	./conf/www.conf /etc/php8/php-fpm.d/www.conf

RUN		wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/bin/wp

WORKDIR	/var/www/html/wordpress
RUN		mkdir -p /run/php

EXPOSE	9000

ENTRYPOINT ["sh", "/tmp/wordpress_setup.sh"]
