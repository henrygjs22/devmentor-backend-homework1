<?php

namespace App;

use App\Event\TestEvent;

class HelloWorld
{
    public function say()
    {
        return 'Hello, world';
        $event = new TestEvent();
    }
}