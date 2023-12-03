<?php

namespace App;

class RegisterSuccessfulEvent extends Event
{
    public function __construct(array $notifyChannels)
    {
        $this->setNotifyChannels($notifyChannels);
    }  
    
}