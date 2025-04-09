NAME = php-test-assignments-app
EXEC = docker exec -it ${NAME}

setup: start
	${EXEC} composer i

lint:
	${EXEC} php vendor/bin/psalm --clear-cache
	${EXEC} php vendor/bin/psalm
	${EXEC} php vendor/bin/phpstan clear-result-cache
	${EXEC} php vendor/bin/phpstan analyse --memory-limit=256M
	${EXEC} php vendor/bin/ecs check --fix
	${EXEC} php vendor/bin/php-cs-fixer fix

test:
	${EXEC} php vendor/bin/phpunit

start:
	docker compose -f ./.docker/compose.yml up -d $(if $(filter 1, $(BUILD)),--build,)

stop:
	@docker ps --filter "name=${NAME}" --format "{{.ID}}" | xargs -r docker stop

exec:
	${EXEC} sh

.PHONY: setup start stop lint test exec
