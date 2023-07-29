#!/bin/sh

chown -R www-data:www-data /var/www/

if [ ! -f "/var/www/html/wordpress/index.php" ]; then
	sudo -u www-data sh -c " \
	wp core download --locale=ko_KR && \
	wp config create --dbname=$V_DB --dbuser=$V_USR --dbpass=$V_PW --dbhost=$V_DB_HOST --dbcharset="utf8" && \
	wp core install --url=$DOMAIN_URL --title=$WP_TITLE --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PW --admin_email=$WP_ADMIN_EMAIL --skip-email && \
	wp user create $WP_USER $WP_EMAIL --role=author --user_pass=$WP_PASSWORD && \
	wp plugin update --all
	"
fi

exec /usr/sbin/php-fpm8 -F
