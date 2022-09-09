NAME		:=	inception

all: build

build: 
		@sudo mkdir -p /home/lbuccher/data /home/lbuccher/data/wordpress /home/lbuccher/data/database
		@sudo chmod 777 /etc/hosts
		@sudo echo "127.0.0.1 lbuccher.42.fr" >> /etc/hosts
		@sudo echo "127.0.0.1 www.lbuccher.42.fr" >> /etc/hosts
		@cd srcs/ && sudo docker-compose up -d --build

status:
		@cd srcs/ && sudo docker-compose ps

up: 
		@cd srcs/ && sudo docker-compose up -d

down: 
		@cd srcs/ && sudo docker-compose down

clean	:
			@cd srcs/ && sudo docker-compose down -v --rmi all --remove-orphans

fclean	:	clean
			@sudo docker system prune --volumes --all --force
			@sudo rm -rf /home/lbuccher/data
			@sudo docker network prune --force
			@echo docker volume rm $(docker volume ls -q)
			@sudo docker image prune --force

re		:	fclean all
