<?php

namespace App;

class Notify
{
    public function message($message)
    {
        echo $message;
    }
}


class EmailNofify extends Notify
{

}

class SMSNofify extends Notify
{

}

class TelegramNofify extends Notify
{

}