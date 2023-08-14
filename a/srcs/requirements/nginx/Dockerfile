# FROM alpine:3.16

# RUN apk update && apk upgrade
# RUN apk add nginx openssl

# RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Jungrang/O=42Seoul/OU=42Seoul/CN=taehykim" -out /etc/ssl/certs/taehykim.42.fr.crt -keyout /etc/ssl/private/taehykim.42.fr.key

# RUN mkdir -p /var/www/html

# COPY ./conf/default.conf /etc/nginx/http.d/default.conf

# EXPOSE 443

# CMD ["nginx", "-g", "daemon off;"]
FROM debian:buster


RUN apt -y update && apt install -y nginx && apt install openssl -y


RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Jungrang/O=42Seoul/OU=42Seoul/CN=taehykim" -out /etc/ssl/certs/taehykim.42.fr.crt -keyout /etc/ssl/private/taehykim.42.fr.key
# COPY ./conf/default.conf /etc/nginx/http.d/default.conf


COPY ./conf/default.conf /etc/nginx/sites-available/

COPY ./tools/script.sh /


CMD [ "/script.sh" ]
