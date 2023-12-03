<?php

namespace App;

class TelegramNotifyChannel extends NotifyChannel
{
    public function notify(string $message)
    {
        echo '[Telegram] ' . $message;
    }
}