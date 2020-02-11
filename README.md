# Hello

This repo is forked from [frob/greetings](https://github.com/frob/greetings) but I've modernised it a little.

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
    > test.php
vendor/
    > autoload.php
    > composer/
    > phpunit/
src/
    > helloworld/
        > greetings.php
```