build: ## Build all service images.
	@docker-compose build \
		--progress plain

build-nc: ## Build all service images without cache.
	@docker-compose build \
		--progress plain \
		--no-cache

up: ## Start development environment.
	@docker-compose up \
		--force-recreate

down: ## Stop and remove all docker resources from this project (containers, networks, etc).
	@docker-compose down \
		--remove-orphans

sh\:php:
	docker-compose exec --user=root unsafe-crud sh

sh\:db:
	docker-compose exec --user=root db-crud sh