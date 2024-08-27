.DEFAULT_GOAL := help
.PHONY: help

help: ## This help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sed -e "s/^Makefile://" | awk 'BEGIN {FS = ": ## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

init: ## Initialize project
	@docker pull php:8.3-fpm 	# Update image for getting latest version with all fixes
	$(MAKE) -s start 		 	# Start containers with application
	$(MAKE) -s composer-install # Install project dependencies

start: ## Start project
	@docker compose up -d --remove-orphans

composer-install: ## Install composer packages
	@docker run --rm -v "./app:/app" -w "/app" composer composer install;

delete: ## Removed project containers
	@rm -rf app/var app/vendor
	@docker compose down -v

restart: ## Restart project
	$(MAKE) -s delete
	$(MAKE) -s init
