# FROM debian:bookworm
# RUN apt-get update -y && apt-get install mariadb-server -y
# COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/
# COPY ./tools/script.sh /
# CMD ["/script.sh"]


FROM debian:bookworm
RUN apt-get update
RUN apt-get install -y mariadb-server vim

COPY tools/setupfile.sh .
RUN chmod +x setupfile.sh

EXPOSE 3306
RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf
COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d
ENTRYPOINT ["bash", "/setupfile.sh"]