#!/bin/sh

chown -R www-data:www-data /var/www/

if [ ! -f "/var/www/html/wordpress/index.php" ]; then
	sudo -u www-data sh -c " \
	wp core download --locale=ko_KR && \
	wp config create --dbname=$MARIA_DB --dbuser=$MARIA_USER --dbpass=$MARIA_PW --dbhost=$MARIA_DB_HOST --dbcharset="utf8" && \
	wp core install --url=$DOMAIN_URL --title=$WP_TITLE --admin_user=$WP_ADMIN_USER --admin_password=$WP_ADMIN_PW --admin_email=$WP_ADMIN_EMAIL --skip-email && \
	wp user create $WP_USER $WP_USER_EMAIL --role=author --user_pass=$WP_PW && \
	wp plugin update --all
	"
fi

exec /usr/sbin/php-fpm8 -F
