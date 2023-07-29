FROM debian:bullseye

RUN apt update
RUN apt install -y mariadb-server
COPY tools/dbinit.sq /
RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf
COPY tools/50-server.cnf /etc/mysql/mariadb.conf.d

RUN service mariadb start && mysql < dbinit.sql
EXPOSE 3306
CMD /usr/bin/mysqld_safe