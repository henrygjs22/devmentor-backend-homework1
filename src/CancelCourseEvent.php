<?php

namespace App;

class CancelCourseEvent extends Event
{
    public function __construct(array $notifyChannels)
    {
        $this->setNotifyChannels($notifyChannels);
    }  
}