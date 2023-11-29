<?php

namespace App;

class Enus
{
    public function getMessage(): array
    {
        return [
            "RegisterSuccessfulEvent" => " Register successful ",
            "BookCourseEvent" => " Book course ",
            "CancelCourseEvent" => " Cancel course "
        ];
    }
}