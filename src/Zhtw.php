<?php

namespace App;

class Zhtw
{
    public function getMessage(): array
    {
        // return json_decode(file_get_contents(__DIR__ . '/zhtw.json'), true);
        return [
            RegisterSuccessfulEvent::class => " 註冊成功",
            BookCourseEvent::class => " 預約課程",
            CancelCourseEvent::class => " 取消課程"
        ];
    }
}