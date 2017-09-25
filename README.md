# config

Simple config library for php

-------------------------------------------------

### Dependecies

- PHP >= 5.3
- vlucas/phpdotenv : lasted version

-------------------------------------------------

## 1. Installing

Easy install via composer. Still no idea what composer is? Inform yourself [here](http://getcomposer.org).

```composer require lefuturiste/config```

-------------------------------------------------

## 2. Usage

### Create .env file in 

In your base path you must create .env file.

### Config path

The first params of config class is path of your .php config files

### Change .env path

The second params of config class is path of your .env file (just directory, no file).

### Get config array

```
$configArray = new \lefuturiste\config\Config(dirname(__DIR__) . '/App/config/', dirname(__DIR__));
```