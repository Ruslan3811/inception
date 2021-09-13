FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get install -y nginx vim procps openssl net-tools
COPY ./nginx.conf /etc/nginx/sites-available/default
RUN mkdir -p /etc/ssl/private
RUN chmod 700 /etc/ssl/private
RUN openssl req -x509 -nodes -days 365 -subj "/C=RF/ST=Kazan/L=Kazan/O=innoaca/OU=school21/CN=aahri" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt;
CMD ["nginx", "-g", "daemon off;" ]
