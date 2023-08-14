# FROM debian:buster


# RUN apt update -y 

# RUN apt install php-fpm php-mysql -y

# RUN apt install curl -y


# COPY ./tools/script.sh /
# COPY ./tools/wp-config.php /


# CMD [ "/script.sh" ]

# FROM debian:buster

# RUN apt-get update

# RUN apt-get -y install php7.3 php-mysqli php-fpm mariadb-client
# COPY ./www.conf /etc/php/7.3/fpm/pool.d

# ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
# RUN cd /var/www && tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
# RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz
# RUN rm -f /var/www/wordpress/wp-config-sample.php
# COPY ./wp-config.php ./var/www/wordpress/

# RUN mkdir ./run/php/
# CMD ./usr/sbin/php-fpm7.3 -F

FROM	debian:buster
RUN		echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until

RUN		apt update && \
		apt upgrade && \
		# apk add --no-cache \
		mariadb-client \
		wget \
		curl \
		php8-fpm \
		php8-cli \
		php8-mysqli \
		php8-phar \
		php8-iconv \
		sudo

# Create www-data user and assign to the existing www-data group
RUN		adduser -S -D -H -h /var/www -s /sbin/nologin -G www-data -g 'Web Server' www-data

COPY	./tools/wordpress_setup.sh /tmp/wordpress_setup.sh
COPY	./conf/www.conf /etc/php8/php-fpm.d/www.conf

RUN		wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/bin/wp

WORKDIR	/var/www/html/wordpress
RUN		mkdir -p /run/php

EXPOSE	9000

ENTRYPOINT ["sh", "/tmp/wordpress_setup.sh"]