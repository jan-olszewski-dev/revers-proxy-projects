.DEFAULT_GOAL := help
.PHONY: help

help: ## This help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sed -e "s/^Makefile://" | awk 'BEGIN {FS = ": ## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

start: ## Start project
	@docker compose up -d --remove-orphans

delete: ## Removed project containers
	@docker compose down -v

restart: ## Restart project
	$(MAKE) -s delete
	$(MAKE) -s start
