FROM debian:buster
RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install redis-server wget
COPY ./redis.conf /etc/redis/redis.conf
EXPOSE 6379
CMD ["redis-server", "--protected-mode no"]