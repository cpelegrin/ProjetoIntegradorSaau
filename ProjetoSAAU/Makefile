DOCKER_COMPOSE_FILE=docker-compose.yml

.PHONY: bash
bash:
	@docker exec -it projeto-saau bash

.PHONY: migrate
migrate:
	@docker exec -it projeto-saau bash -c "php artisan migrate"

.PHONY: migrate-fresh
migrate-fresh:
	@docker exec -it projeto-saau bash -c "php artisan migrate:fresh"

.PHONY: seed
seed:
	@docker exec -it projeto-saau bash -c "php artisan db:seed"

.PHONY: up
up:
	@docker-compose -f $(DOCKER_COMPOSE_FILE) up -d

.PHONY: down
down:
	@docker-compose -f $(DOCKER_COMPOSE_FILE) down

.PHONY: build
build:
	@docker-compose -f $(DOCKER_COMPOSE_FILE) build

.PHONY: watch
watch:
	@docker exec -it projeto-saau bash -c "npm run watch"

.PHONY: clear
clear:
	@docker exec projeto-saau bash -c "php artisan cache:clear"
	@docker exec projeto-saau bash -c "php artisan config:clear"
	@docker exec projeto-saau bash -c "php artisan route:clear"
	@docker exec projeto-saau bash -c "php artisan view:clear"