FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add vim

RUN apk add nginx
COPY config_nginx /etc/nginx/conf.d/default.conf

#ssl
COPY gtresa.crt /etc/ssl/gtresa.crt
COPY gtresa.key /etc/ssl/gtresa.key

COPY start_docker.sh /my_svc/start_docker.sh
RUN chmod +x /my_svc/start_docker.sh
RUN mkdir -p /run/nginx
EXPOSE 80 443
CMD  ["/my_svc/start_docker.sh"]
