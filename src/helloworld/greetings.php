<?php

namespace HelloWorld;

use SebastianBergmann\Timer\Timer;

class Greetings
{

    public static function sayHelloWorld()
    {
        $timer = new Timer();
        $timer->start();
        return PHP_EOL . 'Hello World' . PHP_EOL . $timer->resourceUsage() . PHP_EOL;
    }

}
