#!/bin/bash



# create directory to use in nginx container later and also to setup the wordpress conf
mkdir -p /var/www/html
cd /var/www/html


rm -rf *

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar 

chmod +x wp-cli.phar 

mv wp-cli.phar /usr/local/bin/wp


wp core download --allow-root

mv /var/www/html/wp-config-sample.php /var/www/html/wp-config.php

mv /wp-config.php /var/www/html/wp-config.php

wp core install --url=$DOMAIN_URL/ --title=$TITLE --admin_user=$ADMINR --admin_password=$ADMIN_PW --admin_email=$ADMIN_EMAIL --skip-email --allow-root




wp user create $WP_USER $WP_EMAIL --role=author --user_pass=$WP_PASSWORD --allow-root


wp theme install astra --activate --allow-root


wp plugin install redis-cache --activate --allow-root

wp plugin update --all --allow-root


 
sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf

mkdir /run/php



# wp redis enable --allow-root

/usr/sbin/php-fpm7.3 -F