test:
	vendor/bin/tester tests/src -C
build:
	php generator/index.php
phpstan:
	vendor/bin/phpstan analyse
phpstan-baseline:
	vendor/bin/phpstan analyse -b
