<?php

namespace App;

class User
{
    private $id;
    private $language; // zhtw | enus
    
    public function __construct($id, $language)
    { 
        $this->id = $id;
        $this->language = $language;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getId()
    {
        return $this->id;
    }
}