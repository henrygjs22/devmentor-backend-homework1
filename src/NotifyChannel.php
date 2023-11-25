<?php

namespace App;

class NotifyChannel
{
    public function notify(string $message)
    {
        echo $message; // [sms]/[email]
    }
}