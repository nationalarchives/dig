# Digital Interface for Government prototype [![Build Status](https://travis-ci.org/nationalarchives/dig.svg?branch=master)](https://travis-ci.org/nationalarchives/dig) [![Build Status](https://travis-ci.org/nationalarchives/dig.svg?branch=develop)](https://travis-ci.org/nationalarchives/dig)

## Purpose 

Alpha version of standardised access point to Digital Records Infrastructure. Scope is validation and upload of born digital records.

## Development environment

This application uses: 

* Composer for PHP dependency management
* The Slim PHP micro-framework for routing and templating (via the slim/twig component) 
* Bower for managing jQuery and Bootstrap as dependencies
* PHPUnit for Unit Testing PHP
* Grunt for task automation

### Configuring development environment

#### Composer dependency management

Composer is used for dependency management, initially for PHPUnit but extending to other dependencies as needed. If you have previously installed Composer you will be able to install dependencies by typing ```composer install``` at the Terminal. If you have not installed Composer follow the 'Installing Composer' steps shown in the [tna-base](https://github.com/nationalarchives/tna-base/) repository.

#### Bower dependency management

Bower manages jQuery and Bootstrap dependencies. Installation of Bower is therefore necessary. Having installed Bower you can install dependencies with ```bower install```

#### Grunt

Bower is used for task automation, including: 

* compiling SASS to CSS
* running a 'watch' task on `.scss` files

If you have previously installed the `grunt-cli` you will be able to install the required packages with `npm install grunt` and then initiate the watch task with `grunt watch`.

### PHPUnit

Having followed the steps under 'Installing Composer' type ```vendor/bin/phpunit -c phpunit.xml``` from within the ```tna-base``` directory to run Unit Tests for the project.

Note: PhpStorm allows for PHPUnit integration - allowing your tests to be run automatically. Search the JetBrains website to find out how to configure this.

## Running the application locally

To run the application locally using the PHP development server type `php -S localhost:8000` at the command line from the project root and visit localhost:8000 from a web browser.
