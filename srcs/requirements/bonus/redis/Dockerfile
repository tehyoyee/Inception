FROM debian:bullseye

RUN apt-get update && apt-get upgrade
RUN apt-get install redis-server -y
RUN sed -i "s/bind 127.0.0.1/# bind 127.0.0.1/g" /etc/redis/redis.conf
RUN sed -i "s/# maxmemory <bytes>/maxmemory 20mb/g" /etc/redis/redis.conf
RUN echo "maxmemory-policy allkeys-lru" >> /etc/redis/redis.conf

EXPOSE 6379

RUN mkdir -p /var/run/redis && touch /var/run/redis/redis-server.pid
RUN chmod -R 777 /var/run/redis

RUN mkdir -p /var/log/redis && touch /var/log/redis/redis-server.log
RUN chmod -R 777 /var/log/redis

CMD [ "redis-server" , "/etc/redis/redis.conf", "--daemonize", "no" ]
