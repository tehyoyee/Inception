FROM debian:bullseye

RUN apt-get update -y
RUN apt-get install -y mariadb-server galera mariadb-client libmariadb3 mariadb-backup mariadb-common

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/script.sh /

CMD ["/script.sh"]