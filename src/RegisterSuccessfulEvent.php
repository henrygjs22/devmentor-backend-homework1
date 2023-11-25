<?php

namespace App;

class RegisterSuccessfulEvent extends Event
{
    public function getContent(User $user)
    {
        // $lang = $user->getLanguage();
        // $path = './' . $lang . '.json';
        // echo $path . PHP_EOL;
        // echo file_get_contents($path);
        // $contents = json_decode(file_get_contents($path), true);

        $lang = $user->getLanguage();
        $contents = $lang->getContents();

        return $contents['registerSuccessful'];
    }
}