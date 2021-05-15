FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add wget nginx supervisor
RUN apk add php7 php7-fpm php7-opcache php7-gd php7-iconv php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session php7-ctype

#nginx
RUN mkdir -p /run/nginx
COPY config_nginx /etc/nginx/conf.d/default.conf

RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz && rm -rf latest.tar.gz
RUN mkdir -p var/www
RUN mv wordpress /var/www/

COPY wp-config.php /var/www/wordpress/wp-config.php
COPY supervisor-nginx-php.conf /etc/supervisord.conf

COPY start_docker.sh /my_svc/start_docker.sh
RUN chmod -R 755 /my_svc/start_docker.sh
RUN chmod -R 755 /etc/supervisord.conf

EXPOSE 5050
CMD ["/my_svc/start_docker.sh"]
