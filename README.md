# Hello Hello

This repo is forked from [frob/greetings](https://github.com/frob/greetings) but I've modernised it a little.

The original repo relates to [this tutorial on some composer basics](https://www.frobiovox.com/posts/2016/08/16/basic-hello-world-with-composer-and-php.html).


## What am I for?

Follow the [original tutorial](https://www.frobiovox.com/posts/2016/08/16/basic-hello-world-with-composer-and-php.html) *using this as a reference*.

Once you're done you should've created your own version of this repo and covered using Composer to...

  * Initialise a project
  * Autoload namespaces
  * Declare dependencies
  * Run tests


## Installation

### Prerequisites

  * This repo cloned to your working directory
  * [Composer](https://getcomposer.org/) installed

### Instructions

Move into the repo:
`cd composer-training`

Install the dependencies using Composer:
`composer install`

Run the tests:
`composer test`

After this, your CLI should show something like this...
```
$ composer test
> php tests/test.php

Hello World
Time: 5 ms, Memory: 2.00 MB

> echo Hello
Hello
```

...and your project directory (where you moved into with the `cd` command) should look something like this:
```
.gitignore
.git
composer.lock
composer.json
README.md
tests/
    test.php
vendor/
    autoload.php
    composer/
    phpunit/
src/
    helloworld/
        greetings.php
```

***

## Resources

 * [Packgist](https://packagist.org/) - a _huge_ library of public PHP packages you can require into your project using Composer
 * [Composer](https://getcomposer.org/) - super powerful dependency and project management tool for PHP projects