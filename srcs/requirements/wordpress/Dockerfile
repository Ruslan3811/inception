FROM debian:buster

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install vim wget wordpress php7.3 php7.3-fpm php-mysql php-fpm php-pdo php-gd php-cli php-mbstring net-tools

RUN mv /usr/share/wordpress /var/www/html/wordpress
COPY ./wp-config.php /var/www/html/wordpress
RUN mv /var/www/html/index.html /var/www/html/wordpress/
RUN rm -rf /var/www/html/wordpress/wp-config-sample.php
RUN sed -i '36 s/\/run\/php\/php7.3-fpm.sock/9000/' /etc/php/7.3/fpm/pool.d/www.conf
RUN mkdir -p /run/php/
RUN chown -R www-data:www-data /var/www/html/wordpress
RUN chmod -R 775 /var/www/html/wordpress
COPY ./tools/wp.sh /tmp/
RUN chmod 777 /tmp/wp.sh
EXPOSE 9000
ENTRYPOINT [ "/tmp/wp.sh" ]
CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]
