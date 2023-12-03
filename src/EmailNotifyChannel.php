<?php

namespace App;

class EmailNotifyChannel extends NotifyChannel
{
    public function notify(string $message)
    {
        echo '[Email] ' . $message;
        return '[Email] ' . $message;
    }
}