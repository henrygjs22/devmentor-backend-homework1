<?php

namespace App;

class RegisterSuccessfulEvent extends Event
{
    public function __construct()
    {
        $this->setNotifyChannels([new EmailNotifyChannel(), new SMSNotifyChannel()]);
    }
     
    // //Put in Event?
    // public function getContent(User $user)
    // {
    //     // $lang = $user->getLanguage();
    //     // $path = './' . $lang . '.json';
    //     // echo $path . PHP_EOL;s($path);
    //     // $contents = json_decode(file_get_contents($path), true);

    //     $lang = $user->getLanguage(); //Object(Zhtw)
    //     $contents = $lang->getMessage(); //array

    //     return $contents['registerSuccessful'];
    //     // echo file_get_content
    // }
}