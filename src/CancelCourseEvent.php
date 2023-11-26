<?php

namespace App;

class CancelCourseEvent extends Event
{
    public function __construct()
    {
        $this->setEventName("cancelCourse");
        $this->notifyChannels = [new EmailNotifyChannel(), new TelegramNotifyChannel()];
        foreach ($this->notifyChannels as $notifyChannel) {
            $this->setNotifyChannelNames($notifyChannel->getMyName());
        }
    }
}