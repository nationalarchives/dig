# Digital Interface for Government prototype

Master branch [![Build Status](https://travis-ci.org/nationalarchives/dig.svg?branch=master)](https://travis-ci.org/nationalarchives/dig). Develop is [![Build Status](https://travis-ci.org/nationalarchives/dig.svg?branch=develop)](https://travis-ci.org/nationalarchives/dig)

## Purpose 

Alpha version of standardised access point to Digital Records Infrastructure. Scope is validation and upload of born digital records.

## Development environment

This application uses: 

* Composer for PHP dependency management
* PHPUnit for Unit Testing PHP

### Configuring development environment

#### Composer dependency management

Composer is used for dependency management, initially for PHPUnit but extending to other dependencies as needed. If you have previously installed Composer you will be able to install dependencies by typing ```composer install``` at the Terminal. If you have not installed Composer follow the 'Installing Composer' steps shown in the [tna-base](https://github.com/nationalarchives/tna-base/) repository.

### PHPUnit

Having followed the steps under 'Installing Composer' type ```vendor/bin/phpunit -c phpunit.xml``` from within the ```tna-base``` directory to run Unit Tests for the project.

Note: PhpStorm allows for PHPUnit integration - allowing your tests to be run automatically. Search the JetBrains website to find out how to configure this.
