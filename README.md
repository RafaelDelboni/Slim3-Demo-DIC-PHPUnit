# Slim 3 Demo Application with Dependency Injection, Mockup Repository and PHPUnit

This is a study done based in the [Slim Skeleton Application](https://github.com/slimphp/Slim-Skeleton), created to proof some concepts of IOC(DI) + Unity testing + Repository mockup for tests. 

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install Slim.

```bash
php composer.phar install
```
This will get all the dependencies.

## Plugins
This Demo is currently extended with the following plugins:

- [slim/slim](https://github.com/slimphp/Slim)
- [slim/php-view](https://github.com/slimphp/PHP-View)
- [monolog/monolog](http://github.com/Seldaek/monolog)
- [zendframework/zend-config](https://github.com/zendframework/zend-config)
- [phpunit/phpunit](https://github.com/sebastianbergmann/phpunit)

## Testing
After installing Composer dependencies, simply run this command from the project root folder:
```bash
vendor/bin/phpunit
```
Or in case of windows:
```bash
vendor\bin\phpunit.bat
```
