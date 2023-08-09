FROM debian:bullseye

RUN apt-get update && apt-get install -y mariadb-server

RUN	adduser -S mariadb && addgroup -S mariadb
RUN mkdir -p /var/run/mysqld
RUN chown -R mariadb:mariadb /var/lib/mysql /var/run/mysqld
RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf

COPY conf/dbinit.sql /
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN service mariadb start && mysql < dbinit.sql
EXPOSE 3306
CMD /usr/bin/mysqld_safe
