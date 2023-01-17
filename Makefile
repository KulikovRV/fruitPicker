install:
	composer install
	
validate:
	composer validate

test:
	composer exec --verbose phpunit tests

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin