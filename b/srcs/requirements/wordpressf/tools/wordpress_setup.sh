#!/bin/sh

chown -R www-data:www-data /var/www/

if [ ! -f "/var/www/html/wordpress/index.php" ]; then
	sudo -u www-data sh -c " \
	wp core download --locale=ko_KR && \
	wp config create --dbname=$DB_WORDPRESS --dbuser=$ADMIN --dbpass=$ADMIN_PW --dbhost=$DB_HOST --dbcharset="utf8" && \
	wp core install --url=$DOMAIN_URL --title=$TITLE --admin_user=$ADMIN --admin_password=$ADMIN_PW --admin_email=$ADMIN_EMAIL --skip-email && \
	wp user create $WP_USER $WP_EMAIL --role=author --user_pass=$WP_PASSWORD && \
	wp plugin update --all
	"
fi

exec /usr/sbin/php-fpm7.3 -F
