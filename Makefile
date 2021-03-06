.PHONY: vendor

PHP=$(shell which php)
COMPOSER=./composer.phar

all: vendor update

vendor: composer.phar
	$(COMPOSER) install

update: composer/update vendor/update

composer.phar:
	php -r "readfile('https://getcomposer.org/installer');" | php

composer/update:
	$(COMPOSER) self-update

vendor/update: composer.phar
	$(COMPOSER) update

test:
	cd ./application/tests/ && ../../vendor/bin/phpunit
