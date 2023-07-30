FROM debian:bullseye

RUN apt update
    # apt install -y mariadb-client php7.4 php-fpm php-cli wget curl php-mysql php-mbstring php-xml sendmail vim
RUN apt install -y mariadb-client wget curl php7.4 php-fpm php-cli php-mysqli php-phar php-iconv sudo
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xvf latest.tar.gz
RUN mkdir -p /var/www/html
RUN mv /wordpress/* /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN rm -r /wordpress latest.tar.gz
COPY ./conf/wp-config.php /var/www/html/
#var/www/html/wp-config-sample.php /var/www/html/wp-config.php
RUN rm /etc/php/7.4/fpm/pool.d/www.conf
COPY ./conf/www.conf /etc/php/7.4/fpm/pool.d
COPY ./conf /var/www/

EXPOSE 9000

RUN service php7.4-fpm start
# CMD ["bash", "/var/www/setup.sh"]
