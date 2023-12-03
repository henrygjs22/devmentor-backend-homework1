<?php

namespace Tests;

use App\Enus;
use App\User;
use App\Zhtw;
use App\BookCourseEvent;
use App\SMSNotifyChannel;
use App\CancelCourseEvent;
use App\EmailNotifyChannel;
use App\TelegramNotifyChannel;
use PHPUnit\Framework\TestCase;
use App\RegisterSuccessfulEvent;

class NotifyTest extends TestCase
{
    public function test_register_successful_event_zh_tw()
    {
        $registerSuccessful = new RegisterSuccessfulEvent([new EmailNotifyChannel(), new SMSNotifyChannel()]);
        $user = new User(1, new Zhtw());
        $actual = $registerSuccessful->dispatch($user);
        $expected = "[Email] No.1 註冊成功" . PHP_EOL . "[SMS] No.1 註冊成功" . PHP_EOL;
        $this->assertEquals($expected, $actual);
    }

    public function test_register_successful_event_en_us()
    {
        $registerSuccessful = new RegisterSuccessfulEvent([new EmailNotifyChannel(), new SMSNotifyChannel()]);
        $user = new User(2, new Enus());
        $actual = $registerSuccessful->dispatch($user);
        $expected = "[Email] No.2 Register successful" . PHP_EOL . "[SMS] No.2 Register successful" . PHP_EOL;
        $this->assertEquals($expected, $actual);
    }

    public function test_book_course_event_zh_tw()
    {
        $bookCourse = new BookCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
        $user = new User(3, new Zhtw());
        $actual = $bookCourse->dispatch($user);
        $expected = "[Email] No.3 預約課程" . PHP_EOL . "[Telegram] No.3 預約課程" . PHP_EOL;
        $this->assertEquals($expected, $actual);
    }
    
    public function test_book_course_event_en_us()
    {
        $bookCourse = new BookCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
        $user = new User(4, new Enus());
        $actual = $bookCourse->dispatch($user);
        $expected = "[Email] No.4 Book course" . PHP_EOL . "[Telegram] No.4 Book course" . PHP_EOL;
        $this->assertEquals($expected, $actual);
    }

    public function test_cancel_course_event_zh_tw()
    {
        $cancelCourse = new CancelCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
        $user = new User(5, new Zhtw());
        $actual = $cancelCourse->dispatch($user);
        $expected = "[Email] No.5 取消課程" . PHP_EOL . "[Telegram] No.5 取消課程" . PHP_EOL;
        $this->assertEquals($expected, $actual);
    }
    public function test_cancel_course_event_en_us()
    {
        $cancelCourse = new CancelCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
        $user = new User(6, new Enus());
        $actual = $cancelCourse->dispatch($user);
        $expected = "[Email] No.6 Cancel course" . PHP_EOL . "[Telegram] No.6 Cancel course" . PHP_EOL;
        $this->assertEquals($expected, $actual);
    }
}