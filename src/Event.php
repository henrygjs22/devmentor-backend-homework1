<?php

namespace App;

class Event
{    
    private $notifyChannels;

    public function __construct(array $notifyChannels)
    {
        // [EmailNofify, SmsNotify]
        // [1,2,3]
        // ['a', 'b']
        $this->notifyChannels = $notifyChannels;
    }

    public function dispatch(User $user)
    {
        $msg = $this->getContent($user);
        foreach ($this->notifyChannels as $notifyChannel) {
            $notifyChannel->notify($msg);
        }
    }
}