test:
	vendor/bin/tester tests/src
phpstan:
	vendor/bin/phpstan analyse
phpstan-baseline:
	vendor/bin/phpstan analyse -b
