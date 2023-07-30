FROM debian:bullseye

RUN apt-get update && apt-get upgrade && apt-get install -y mariadb-server
COPY conf/dbinit.sql /

RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
RUN service mariadb start && mysql < dbinit.sql
EXPOSE 3306
CMD /usr/bin/mysqld_safe
