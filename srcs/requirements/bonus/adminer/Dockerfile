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
# RUN apt-get update && apt-get upgrade && \ apt-get install -y
#     php${PHP_VERSION} \
#     php${PHP_VERSION}-common \
#     php${PHP_VERSION}-session \
#     php${PHP_VERSION}-iconv \
#     php${PHP_VERSION}-gd \
#     php${PHP_VERSION}-curl \
#     php${PHP_VERSION}-xml \
#     php${PHP_VERSION}-mysqli \
#     php${PHP_VERSION}-imap \
#     php${PHP_VERSION}-cgi \
#     php${PHP_VERSION}-pdo \
#     php${PHP_VERSION}-pdo_mysql \
#     php${PHP_VERSION}-soap \
#     php${PHP_VERSION}-posix \
#     php${PHP_VERSION}-gettext \
#     php${PHP_VERSION}-ldap \
#     php${PHP_VERSION}-ctype \
#     php${PHP_VERSION}-dom \
#     php${PHP_VERSION}-simplexml \
#     wget

WORKDIR /var/www/html

RUN wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php && \
    mv adminer-4.8.1.php index.php && chown -R root:root /var/www/html

EXPOSE 8080

CMD	[ "php", "-S", "[::]:8080", "-t", "/var/www/html" ]
