FROM debian:bullseye

RUN apt-get update && apt-get upgrade
RUN apt-get install -y nginx

RUN sed -i 's/listen 80 default_server/listen 1000 default_server/g' /etc/nginx/sites-available/default
RUN sed -i 's/listen [::]:80 default_server/listen [::]:1000 default_server/g' /etc/nginx/sites-available/default

COPY /conf/* /var/www/html/

EXPOSE 1000

CMD ["nginx", "-g", "daemon off;"]
