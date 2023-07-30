FROM debian:bullseye

ENV USER=user1

# system 시간과 달라서 문제가 되어 시간 맞춰주는 명령 실행 후 실행
RUN echo "Acquire::Check-Valid-Until \"false\";\nAcquire::Check-Date \"false\";" | cat > /etc/apt/apt.conf.d/10no--check-valid-until
RUN apt update
RUN apt install -y nginx openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=KR/ST=Seoul/L=Jungrang-gu/O=42Seoul/OU=Cadet/CN=taehykim.42.fr" -keyout /etc/ssl/private/taehykim.42.fr.key -out /etc/ssl/certs/taehykim.42.fr.crt
#RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Seoul/O=42/OU=42Seoul/CN=taehykim.42.fr"
RUN rm /etc/nginx/sites-available/default
COPY ./conf/default.conf /etc/nginx/sites-available/default

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]