<?php

require_once 'vendor/autoload.php';

use App\Enus;
use App\User;
use App\Zhtw;
use App\HelloWorld;
use App\BookCourseEvent;
use App\SMSNotifyChannel;
use App\CancelCourseEvent;
use App\EmailNotifyChannel;
use App\TelegramNotifyChannel;
use App\RegisterSuccessfulEvent;

// $helloWorld = new HelloWorld();
// echo $helloWorld->say();

$user1 = new User(1, new Enus());
$user2 = new User(2, new Zhtw());
$user3 = new User(3, new Enus());

// $notifyChannels = [
//     new EmailNotifyChannel(),  // 註冊成功 -> [email] 註冊成功 / [email] register successful
//     new SMSNotifyChannel(),    // [sms] 註冊成功
// ];

// 都固定，dependency injection 可測試性更好
// framework DI

// $event = app(RegisterSuccessfulEvent::class);
// $event = new RegisterSuccessfulEvent();

// $registerSuccessful = new RegisterSuccessfulEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
$bookCourse = new BookCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
// $cancelCourse = new CancelCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
// $registerSuccessful->dispatch($user1);
$bookCourse->dispatch($user2);
// $cancelCourse->dispatch($user3);