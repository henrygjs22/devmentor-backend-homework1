<?php

namespace App;

class NotifyChannel
{
    protected $myName; //eg. '[Email ]'
    
    public function getMyName()
    {
        return $this->myName;
    }
    
    public function notify(string $message)
    {
        echo $message; // [sms]/[email]
    }
}