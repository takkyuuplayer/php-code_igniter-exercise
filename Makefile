.PHONY: vendor

PHP=$(shell which php)
COMPOSER=./composer.phar

all: vendor vendor/update

composer.phar:
	php -r "readfile('https://getcomposer.org/installer');" | php

vendor: composer.phar
	$(COMPOSER) install

test:
	cd ./application/tests/ && ../../vendor/bin/phpunit

vendor/update: composer.phar
	$(COMPOSER) update
