<?php

namespace App;

class TelegramNotifyChannel extends NotifyChannel
{
    public function __construct()
    {
        $this->myName = '[Telegram] ';
    }
}