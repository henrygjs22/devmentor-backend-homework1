<?php

namespace App;

class SMSNotifyChannel extends NotifyChannel
{
    public function notify(string $message)
    {
        echo '[SMS] ' . $message;
    }
}