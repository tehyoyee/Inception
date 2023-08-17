#!/bin/bash

mkdir -p /var/www/html/wordpress
cd /var/www/html/wordpress

rm -rf *
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar 
chmod +x wp-cli.phar 

mv wp-cli.phar /usr/bin/wp

wp core download --locale=ko_KR --allow-root
mv /var/www/html/wordpress/wp-config-sample.php /var/www/html/wordpress/wp-config.php
# mv /wp-config.php /var/www/html/wordpress/wp-config.php

sed -i -r "s/db1/$DB_WORDPRESS/1"   wp-config.php
sed -i -r "s/user/$ADMIN/1"  wp-config.php
sed -i -r "s/pwd/$ADMIN_PW/1"    wp-config.php

# wp config create --dbname=$DB_WORDPRESS --dbuser=$ADMIN --dbpass=$ADMIN_PW --dbhost=$DB_HOST --dbcharset="utf8"
wp core install --url=$DOMAIN_URL/ --title=$TITLE --admin_user=$ADMIN --admin_password=$ADMIN_PW --admin_email=$ADMIN_EMAIL --skip-email --allow-root
wp user create $WP_USER $WP_EMAIL --role=author --user_pass=$WP_PASSWORD --allow-root
wp plugin update --all --allow-root
sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 0.0.0.0:9000/g' /etc/php/7.3/fpm/pool.d/www.conf
mkdir /run/php

/usr/sbin/php-fpm7.3 -F