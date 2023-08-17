FROM debian:buster

RUN apt-get update -y
RUN apt-get install mariadb-server galera mariadb-client libmariadb3 mariadb-backup mariadb-common -y

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/script.sh /

CMD ["/script.sh"]