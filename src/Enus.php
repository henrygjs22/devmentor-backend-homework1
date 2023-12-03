<?php

namespace App;

class Enus
{
    public function getMessage(): array
    {
        
        return [
            RegisterSuccessfulEvent::class => " Register successful",
            BookCourseEvent::class => " Book course",
            CancelCourseEvent::class => " Cancel course"
        ];
    }
}