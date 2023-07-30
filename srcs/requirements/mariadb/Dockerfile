FROM debian:buster

RUN apt-get update
RUN apt-get install -y mariadb-server
COPY conf/dbinit.sql /
RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf
COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d

RUN service mariadb start && mysql < dbinit.sql
EXPOSE 3306
CMD /usr/bin/mysqld_safe