<?php

namespace App;

class Event
{    
    private $eventName;
    private $notifyChannels = [];
    private $notifyChannelNames = [];   

    public function __construct(array $notifyChannels)
    {
        $this->notifyChannels = $notifyChannels;
    }
    
    public function getContent(User $user)
    {
        $lang = $user->getLanguage(); //language object
        $contents = $lang->getMessage(); //array  
        $classname = get_class($this);
        return $contents[$classname];
    }

    public function dispatch(User $user)
    {
        $allmessage = '';
        $msg = 'No.' . $user->getId() . $this->getContent($user);
        foreach ($this->notifyChannels as $notifyChannel) {           
            $allmessage .= $notifyChannel->notify($msg . PHP_EOL);
        }
        return $allmessage;
    }
}