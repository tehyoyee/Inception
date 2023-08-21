FROM debian:bullseye

RUN apt-get update -y
RUN apt-get install -y mariadb-server dumb-init

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/script.sh /

ENTRYPOINT ["/usr/bin/dumb-init", "--", "/script.sh"]
