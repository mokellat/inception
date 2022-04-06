# docker rm -vf $(docker ps -aq)
# docker rmi wordpress nginx mariadb
# docker volume rm srcs_db srcs_wordpress
run:
# docker system prune -a
	sudo rm -rf /home/mokellat/
	sudo mkdir -p /home/mokellat/data
	sudo mkdir -p /home/mokellat/data/wp-files
	sudo mkdir -p /home/mokellat/data/wp-db
	docker-compose -f srcs/docker-compose.yml up --build
down:
	docker-compose -f srcs/docker-compose.yml down