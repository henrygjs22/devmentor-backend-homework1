<?php

namespace App;

class Event
{    
    private $eventName;
    private $notifyChannels = array();
    private $notifyChannelNames = array();   
    
    public function setNotifyChannels(array $notifyChannel)
    {
        $this->notifyChannels = $notifyChannel;
    }
    
    public function getContent(User $user)
    {
        $lang = $user->getLanguage(); //Object(Zhtw)
        $contents = $lang->getMessage(); //array
        $classname = explode('\\', get_class($this));
        $key = end($classname);

        return $contents[$key];
    }

    public function dispatch(User $user)
    {
        $msg = 'No.' . $user->getId() . $this->getContent($user);
        foreach ($this->notifyChannels as $notifyChannel) {           
            $notifyChannelName = $notifyChannel->getMyName();
            $notifyChannel->notify($notifyChannelName . $msg . PHP_EOL);
        }
    }
}