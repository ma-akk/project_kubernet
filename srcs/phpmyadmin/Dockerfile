FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add wget nginx supervisor
RUN apk add php7-fpm php7-opcache php7-gd php7-iconv php7-mysqli php7-json php7-session

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz
RUN tar -xf phpMyAdmin-5.0.4-english.tar.gz && rm -rf phpMyAdmin-5.0.4-english.tar.gz
RUN mkdir -p var/www
RUN mv phpMyAdmin-5.0.4-english var/www/phpmyadmin
RUN mkdir -p /run/nginx

COPY config.inc.php var/www/phpmyadmin
COPY config_nginx /etc/nginx/conf.d/default.conf

COPY supervisor-nginx-php.conf /etc/supervisord.conf

COPY start_docker.sh /my_svc/start_docker.sh
RUN chmod +x /my_svc/start_docker.sh

EXPOSE 5000
CMD ["/my_svc/start_docker.sh"]
