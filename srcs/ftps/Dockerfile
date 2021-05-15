FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add vsftpd openrc 

#ssl
COPY gtresa.crt /etc/ssl/gtresa.crt
COPY gtresa.key /etc/ssl/gtresa.key
		
RUN addgroup -S ftps && adduser -S admin -G ftps -h /var/www
RUN echo "admin:123" | chpasswd
RUN chown admin:ftps /var/www

COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY start_docker.sh /my_svc/start_docker.sh
RUN chmod +x /my_svc/start_docker.sh

EXPOSE 21 21000
CMD ["/my_svc/start_docker.sh"]
