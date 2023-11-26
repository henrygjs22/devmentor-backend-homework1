<?php

namespace App;

class EmailNotifyChannel extends NotifyChannel
{
    //Why can't just assign?
    public function __construct()
    {
        $this->myName = '[Email] ';
    }
}