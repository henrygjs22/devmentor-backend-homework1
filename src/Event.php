<?php

namespace App;

class Event
{
    public function dispatch()
    {
        
    }
}

class RegisterEvent extends Event
{

}

class BookCourseEvent extends Event
{

}

class CancelCourseEvent extends Event
{

}