.PHONY: vendor

PHP=$(shell which php)
COMPOSER=./composer.phar

all: vendor vendor/update

composer.phar:
	php -r "readfile('https://getcomposer.org/installer');" | php

vendor: composer.phar
	$(COMPOSER) install

vendor/update: composer.phar
	$(COMPOSER) update
