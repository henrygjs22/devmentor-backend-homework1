<?php

namespace App;

class CancelCourseEvent extends Event
{
    public function __construct()
    {
        $this->setNotifyChannels([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
    }
}