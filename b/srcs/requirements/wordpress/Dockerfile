# FROM	alpine:3.16
# # RUN		echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until

# RUN		apk update && \
# 		apk upgrade && \
# 		apk add --no-cache \
# 		mariadb-client \
# 		wget \
# 		curl \
# 		php8-fpm \
# 		php8-cli \
# 		php8-mysqli \
# 		php8-phar \
# 		php8-iconv \
# 		sudo

# # Create www-data user and assign to the existing www-data group
# RUN		adduser -S -D -H -h /var/www -s /sbin/nologin -G www-data -g 'Web Server' www-data

# COPY	./tools/wordpress_setup.sh /tmp/wordpress_setup.sh
# COPY	./conf/www.conf /etc/php8/php-fpm.d/www.conf

# RUN		wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/bin/wp

# WORKDIR	/var/www/html/wordpress
# RUN		mkdir -p /run/php

# EXPOSE	9000

# ENTRYPOINT ["sh", "/tmp/wordpress_setup.sh"]

# FROM debian:buster

# RUN apt update -y 
# RUN apt install php-fpm php-mysql -y
# RUN apt install curl -y

# COPY ./tools/script.sh /
# COPY ./tools/wp-config.php /

# EXPOSE 9000
# CMD [ "/script.sh" ]


FROM	debian:buster
# RUN		echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until

RUN apt update -y 
RUN apt install php8-fpm php8-mysqli php8-phar php8-iconv php-cli -y
RUN apt install curl wget mariadb-client -y

# Create www-data user and assign to the existing www-data group
RUN		adduser -S -D -H -h /var/www -s /sbin/nologin -G www-data -g 'Web Server' www-data

COPY	./tools/wordpress_setup.sh /tmp/wordpress_setup.sh
COPY	./conf/www.conf /etc/php8/php-fpm.d/www.conf

RUN		wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && chmod +x wp-cli.phar && mv wp-cli.phar /usr/bin/wp

WORKDIR	/var/www/html/wordpress
RUN		mkdir -p /run/php

EXPOSE	9000

ENTRYPOINT ["sh", "/tmp/wordpress_setup.sh"]