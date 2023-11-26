<?php

namespace App;

class BookCourseEvent extends Event
{
    
    public function __construct()
    {
        $this->setEventName("bookCourse");
        $this->notifyChannels = [new EmailNotifyChannel(), new TelegramNotifyChannel()];
        foreach ($this->notifyChannels as $notifyChannel) {
            $this->setNotifyChannelNames($notifyChannel->getMyName());
        }
    }

    
}