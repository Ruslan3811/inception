all:
	sudo docker-compose -f srcs/docker-compose.yaml up

down:
	sudo docker-compose -f srcs/docker-compose.yaml down

rm_vol:
	sudo docker volume rm -f srcs_wp
	sudo docker volume rm -f srcs_db

rm_vol2:
	sudo rm -rf /home/john/data/wp/*
	sudo rm -rf /home/john/data/db/*

dirs:
	sudo mkdir -p /home/john/data/db
	sudo mkdir -p /home/john/data/wp

re:
	sudo docker-compose -f srcs/docker-compose.yaml up --build
