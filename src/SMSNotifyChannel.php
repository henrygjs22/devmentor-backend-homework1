<?php

namespace App;

class SMSNotifyChannel extends NotifyChannel
{
    public function __construct()
    {
        $this->myName = '[SMS] ';
    }
}