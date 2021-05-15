FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add wget mysql mysql-client openrc libc6-compat

RUN mkdir -p /run/mysqld
VOLUME ["/var/lib/mysql"]
VOLUME /sys/fs/cgroup/


COPY my.cnf /etc/mysql/my.cnf
COPY create_db ./create_db
COPY wordpress.sql .

COPY start_docker.sh /my_svc/start_docker.sh
RUN chmod +x /my_svc/start_docker.sh
RUN chmod 777 ./create_db

EXPOSE 3306
CMD ["/my_svc/start_docker.sh"]