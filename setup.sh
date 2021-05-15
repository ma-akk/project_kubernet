minikube start --vm-driver=virtualbox
minikube addons enable metallb
kubectl apply -f ./srcs/configmap.yaml
eval $(minikube docker-env)
docker build -t nginx_image ./srcs/my_nginx && kubectl apply -f ./srcs/my_nginx/nginx.yaml
docker build -t wordpress_image ./srcs/wordpress && kubectl apply -f ./srcs/wordpress/wordpress-deployment.yaml
docker build -t phpmyadmin_image ./srcs/phpmyadmin && kubectl apply -f ./srcs/phpmyadmin/php-deployment.yaml
docker build -t mysql_image	./srcs/mysql/ && kubectl apply -f ./srcs/mysql/mysql-deployment.yaml
docker build -t ftps_image ./srcs/ftps/ && kubectl apply -f ./srcs/ftps/ftps.yaml
docker build -t influxdb_image ./srcs/influxdb/ && kubectl apply -f ./srcs/influxdb/influxdb.yaml
docker build -t grafana_image ./srcs/grafana/ && kubectl apply -f ./srcs/grafana/grafana.yaml
minikube dashboard