FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install default-mysql-server

COPY ./tools/db.sh /tmp/
COPY my.cnf /etc/mysql/my.cnf

RUN chmod +x /tmp/db.sh

EXPOSE 3306

CMD ["/tmp/db.sh", "mysqld"]
