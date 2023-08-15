#!/bin/bash



service mysql start 


echo "CREATE DATABASE IF NOT EXISTS wordpressDB ;" > db1.sql
echo "CREATE USER IF NOT EXISTS 'taehykim'@'%' IDENTIFIED BY 'tae1234' ;" >> db1.sql
echo "GRANT ALL PRIVILEGES ON wordpressDB.* TO 'taehykim'@'%' ;" >> db1.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '1234' ;" >> db1.sql
echo "FLUSH PRIVILEGES;" >> db1.sql

mysql < db1.sql

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld
