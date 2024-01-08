all: test

phpunit:
	php vendor/bin/phpunit --no-coverage

lint:
	php vendor/bin/php-cs-fixer fix --diff
	php vendor/bin/phpcs --report=code
	php vendor/bin/phpstan analyse

test: lint phpunit
