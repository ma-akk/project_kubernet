FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add wget libc6-compat

RUN wget https://dl.grafana.com/oss/release/grafana-7.4.1.linux-amd64.tar.gz
RUN tar -xf grafana-7.4.1.linux-amd64.tar.gz && rm grafana-7.4.1.linux-amd64.tar.gz
RUN mv grafana-7.4.1 grafana

COPY start_docker.sh /my_svc/start_docker.sh
COPY grafana.db /grafana/data/grafana.db
RUN chmod +x /my_svc/start_docker.sh

EXPOSE 3000
CMD ["/my_svc/start_docker.sh"]
