# FROM alpine:3.16

# RUN apk update && apk upgrade 
# RUN apk add mariadb dumb-init

# RUN	adduser -S mariadb && addgroup -S mariadb
# RUN mkdir -p /var/run/mysqld
# RUN chown -R mariadb:mariadb /var/lib/mysql /var/run/mysqld

# COPY conf/mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf
# COPY ./tools /tools

# RUN chmod 777 -R /var/lib/mysql /usr/bin/dumb-init /tools

# EXPOSE 3306
# ENTRYPOINT ["dumb-init", "--", "/bin/sh", "/tools/init.sh"]
# CMD ["mariadbd", "--user=mariadb", "--init-file=/tools/init.sql"]


FROM debian:buster

# RUN echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until
RUN apt-get update -y && apt-get install mariadb-server -y
COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/script.sh /

CMD ["/script.sh"]