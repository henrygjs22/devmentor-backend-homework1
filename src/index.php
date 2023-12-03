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

// $event = app(RegisterSuccessfulEvent::class);
// $event = new RegisterSuccessfulEvent();

$user1 = new User(1, new Enus());
$user2 = new User(2, new Zhtw());
$user3 = new User(3, new Enus());

// 用Dependency Injection(framework DI)可測試性更好
$registerSuccessful = new RegisterSuccessfulEvent([new EmailNotifyChannel(), new SMSNotifyChannel()]);
$bookCourse = new BookCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
$cancelCourse = new CancelCourseEvent([new EmailNotifyChannel(), new TelegramNotifyChannel()]);
$registerSuccessful->dispatch($user1);
$bookCourse->dispatch($user2);
$cancelCourse->dispatch($user3);