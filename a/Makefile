NAME = Inception

all		:	$(NAME)

$(NAME)	:
	@sudo mkdir -p /home/taehykim/data/db/
	@sudo mkdir -p /home/taehykim/data/wordpress/
	@sudo echo 127.0.0.1 taehykim.42.fr > /etc/hosts
	@sudo docker-compose -f ./srcs/docker-compose.yml up --build -d

up		:
	@sudo docker-compose -f ./srcs/docker-compose.yml up -d

down	:
	@sudo docker-compose -f ./srcs/docker-compose.yml down

clean	:
	@sudo docker-compose -f ./srcs/docker-compose.yml down --rmi all --volumes

fclean	: clean
	@sudo rm -rf /home/taehykim

re	: fclean all

.PHONY	: all down clean fclean re