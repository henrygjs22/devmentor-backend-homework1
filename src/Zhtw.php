<?php

namespace App;

class Zhtw
{
    public function getMessage(): array
    {
        return [
            "RegisterSuccessfulEvent" => " 註冊成功 ",
            "BookCourseEvent" => " 預約課程 ",
            "CancelCourseEvent" => " 取消課程 "
        ];
    }
}