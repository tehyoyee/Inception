FROM debian:buster

RUN apt-get -y update && apt-get install -y nginx && apt-get install openssl -y
RUN mkdir -p /var/www/html
RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Jungrang/O=42Seoul/OU=42Seoul/CN=taehykim" -out /etc/ssl/certs/taehykim.42.fr.crt -keyout /etc/ssl/private/taehykim.42.fr.key
COPY ./conf/default /etc/nginx/sites-available/

CMD ["nginx", "-g", "daemon off;"]
