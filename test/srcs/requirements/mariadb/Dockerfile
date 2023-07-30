FROM debian:bullseye

ENV USER=user1

# system 시간과 달라서 문제가 되어 시간 맞춰주는 명령 실행 후 실행
RUN echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until
RUN apt update -y
RUN apt install -y mariadb-server
COPY conf/dbinit.sql /

RUN rm /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
RUN service mariadb start && mysql < dbinit.sql
EXPOSE 3306
CMD /usr/bin/mysqld_safe
