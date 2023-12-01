<?php

namespace App;

class Zhtw
{
    public function getMessage(): array
    {
        return json_decode(file_get_contents(__DIR__ . '/zhtw.json'), true);


        // return [
        //     RegisterSuccessfulEvent::class => " 註冊成功 ",
        //     "BookCourseEvent" => " 預約課程 ",
        //     "CancelCourseEvent" => " 取消課程 "
        // ];
    }
}