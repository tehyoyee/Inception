FROM debian:bullseye

ARG PHP_VERSION=7.4

RUN apt-get update
RUN	apt-get install -y php7.4-cli php7.4-fpm \
		php7.4-mbstring \
		php7.4-mysql \
		php7.4-odbc \
		php7.4-pdo-dblib \
		php7.4-pgsql \
		php7.4-sqlite3 \
        wget

WORKDIR /var/www/html

RUN wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php && \
    mv adminer-4.8.1.php index.php && chown -R root:root /var/www/html

EXPOSE 8080

CMD	[ "php", "-S", "[::]:8080", "-t", "/var/www/html" ]
