#!/bin/bash

chown -R www-data /var/www/wordpress
chmod -R 775 /var/www/wordpress

mkdir -p /run/php/
touch /run/php/php7.3-fpm.pid

if [ ! -f /var/www/wordpress/wp-config.php ]; then
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

cd /var/www/wordpress

wp core download --allow-root

mv /var/www/wp-config.php /var/www/wordpress/

wp core install --allow-root --url=${DOMAIN_URL} --title=${WP-TITLE} --admin_user=${WP_ADMIN_USER} --admin_password=${WP_ADMIN_PW} --admin_email=${WP_ADMIN_EMAIL}
wp user create ${MARIA_USER} ${WORDPRESS_USER_EMAIL} --user_pass=${MARIA_PW} --role=author --allow-root
wp theme install inspiro --activate --allow-root
wp plugin install redis-cache --activate --allow-root
wp plugin update --all --allow-root
wp plugin activate redis-cache --allow-root

fi

wp redis enable --force --allow-root

/usr/sbin/php-fpm7.3 -F
