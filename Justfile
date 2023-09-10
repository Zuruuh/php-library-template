tools := "./tools/vendor/bin/"
phpunit := "./vendor/bin/phpunit --configuration phpunit.dist.xml"
phpstan := tools + "phpstan analyse --configure ./tools/phpstan.dist.neon"
psalm := tools + "psalm --config ./tools/psalm.dist.xml"
phpcsfixer := tools + "php-cs-fixer fix --config ./tools/.php-cs-fixer.dist.php"

install:
    composer install
    composer install --working-dir tools

fix:
    {{phpcsfixer}}

lint:
    {{phpcsfixer}} --dry-run

phpstan:
    {{phpstan}}

psalm:
    {{psalm}}

analyze: analyse
analyse: phpstan psalm

phpunit *args:
    {{phpunit}} --coverage-html .cache/coverage --testdox {{args}}

tests: test
test: phpunit
