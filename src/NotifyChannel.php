<?php

namespace App;

abstract class NotifyChannel
{  
    public abstract function notify(string $message);
}