# Meetup API Client

API wrapper for https://meetup.com

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

- PHP 7.3 or latest
- Composer

### Installing

```
composer require javleds/meetup-api-client
```

## Running the tests

This project uses PHPUnit, you could run your tests by running:

```
composer test
```

### Coding style

This project has been provided with several tools for ensure the quality code

- PHP Code Sniffer
- PHP Mees Detector
- PHP Code Sniffer Fixer
- PHP Metrics
- PHP Loc
- PHP Stan
```
vendor/bin/phpcbf --standard=PSR1 src/ tests/
vendor/bin/phpcbf --standard=PSR2 src/ tests/
vendor/bin/phpcbf --standard=PSR12 src/ tests/
vendor/bin/phpmd src/ xml codesize controversial design naming unusedcode --exclude=vendor/
vendor/bin/phpmd tests/ xml codesize controversial design naming unusedcode --exclude=vendor/
vendor/bin/php-cs-fixer fix src/ --dry-run --diff
vendor/bin/phploc src
vendor/bin/phpmetrics --report-html=report/metrics ./
vendor/bin/phpstan analyse -l 7 src tests
vendor/bin/phploc src
vendor/bin/phpunit -c phpunit.xml
```

php-cs-fixes is able to fix some common errors, 
it could be reached by running:

```
composer phpcs-fix
```

## Built With

* [composer](https://getcomposer.org/) - The web framework used
* [phpunit](https://phpunit.de/) - The web framework used
* [phpcs](https://github.com/FriendsOfPHP/PHP-CS-Fixer) - The web framework used

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
