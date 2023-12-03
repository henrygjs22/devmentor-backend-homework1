<?php

namespace App;

use DateTime;

class Holiday
{
    public function say()
    {
        $date = new DateTime();
        $isXmas = '12-25' === $date->format('m-d');

        if ($isXmas)
        {
            return "Merry X'mas";
        }
        else 
        {
            return "Today is not X'mas";
        }
  
    }
}