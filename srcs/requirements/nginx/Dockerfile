FROM debian:bullseye

RUN apt update
RUN apt install && nginx openssl

RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Seoul/O=42/OU=42Seoul/CN=taehykim.42.fr"

COPY ./conf/default.conf /etc/nginx/http.d/default.conf

EXPOSE 443

ENTRYPOINT ["nginx", "-g", "daemon off;"]