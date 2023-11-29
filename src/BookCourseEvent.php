<?php

namespace App;

class BookCourseEvent extends Event
{   
    public function __construct()
    {
        $this->setNotifyChannels([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
    }  
}