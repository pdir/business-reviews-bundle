
# for development

run PHP-CS-FIXER before commit

    sh tools/php-cs-fixer/vendor/bin/php-cs-fixer fix src

run PHPUnit tests

    sh vendor/bin/phpunit

run cypress tests against demo data

    cd /tools/cypress/
    copy tools/cypress/cypress.default.json to cypress.json
    npm run cypress:open or yarn run cypress open


--------------------------------------------------------


### Install PHP-CS-FIXER

visit https://github.com/FriendsOfPHP/PHP-CS-Fixer for more information

    mkdir --parents tools/php-cs-fixer
    composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer

### Install PHPUnit

visit https://phpunit.de/getting-started/phpunit-9.html

    mkdir --parents tools/phpunit
    composer require --working-dir=tools/phpunit phpunit/phpunit ^9

### Install Cypress

    cd tools/cypress/
    npm install cypress --save-dev
