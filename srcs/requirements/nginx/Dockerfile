FROM debian:bullseye

RUN apt-get update
RUN apt-get install -y nginx openssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=KR/ST=Seoul/L=Jungrang-gu/O=42Seoul/OU=Cadet/CN=taehykim.42.fr" -keyout /etc/ssl/private/taehykim.42.fr.key -out /etc/ssl/certs/taehykim.42.fr.crt

#RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Seoul/O=42/OU=42Seoul/CN=taehykim.42.fr"

COPY ./conf/default.conf /etc/nginx/http.d/default.conf

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]