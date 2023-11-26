<?php

namespace App;

class Event
{    
    private $eventName;
    protected $notifyChannels = array();
    private $notifyChannelNames = array();   
    
    public function setEventName(string $eventName)
    {
        $this->eventName = $eventName;
    }

    public function getEventName()
    {
        return $this->eventName;
    }
    
    public function setNotifyChannels(array $notifyChannel)
    {
        $this->notifyChannels = $notifyChannel;
    }

    public function setNotifyChannelNames($notifyChannelName)
    {
        $this->notifyChannelNames = $notifyChannelName;
    }

    public function getNotifyChannelName()
    {
        return $this->notifyChannelName;
    }
    
    public function getContent(User $user)
    {
        $lang = $user->getLanguage(); //Object(Zhtw)
        $contents = $lang->getMessage(); //array

        return $contents[$this->getEventName()];
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