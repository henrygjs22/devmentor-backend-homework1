<?php

namespace App;

class BookCourseEvent extends Event
{   
    public function __construct(array $notifyChannels)
    {
        $this->setNotifyChannels($notifyChannels);
    }  
}