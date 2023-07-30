FROM debian:bullseye

RUN apt update
RUN apt install -y nginx openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj "/C=KR/ST=Seoul/L=Jungrang-gu/O=42Seoul/OU=Cadet/CN=taehykim.42.fr" -keyout /etc/ssl/private/server_pkey.pem -out /etc/ssl/certs/server.crt
#RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Seoul/O=42/OU=42Seoul/CN=taehykim.42.fr"
RUN rm /etc/nginx/sites-available/default
COPY ./conf/default.conf /etc/nginx/sites-available/default

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]