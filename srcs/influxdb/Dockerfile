FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add influxdb supervisor

RUN apk add telegraf --repository http://dl-2.alpinelinux.org/alpine/edge/community
RUN mkdir /etc/telegraf
RUN telegraf -sample-config --input-filter docker --output-filter influxdb > /etc/telegraf/telegraf.conf

COPY ./supervisor-telegraf.conf   /etc/supervisord.conf
COPY start_docker.sh /my_svc/start_docker.sh
RUN chmod +x /my_svc/start_docker.sh

EXPOSE 8086
CMD ["/my_svc/start_docker.sh"]
