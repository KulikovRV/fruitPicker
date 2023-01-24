install:
	composer install

fruit-picker:
	php bin/fruit-picker
	
validate:
	composer validate

test:
	composer exec --verbose phpunit tests

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

fix-error:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin