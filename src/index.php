<?php
require_once 'vendor/autoload.php';

// use App\HelloWorld;
use App\User;
use App\Zhtw;
use App\Enus;
use App\EmailNotifyChannel;
use App\SMSNotifyChannel;
use App\TelegramNotifyChannel;
use App\RegisterSuccessfulEvent;
use App\BookCourseEvent;
use App\CancelCourseEvent;

// $helloWorld = new HelloWorld();
// echo $helloWorld->say();

$user1 = new User(1, new Enus());
$user2 = new User(2, new Zhtw());
$user3 = new User(3, new Enus());

// $notifyChannels = [
//     new EmailNotifyChannel(),  // 註冊成功 -> [email] 註冊成功 / [email] register successful
//     new SMSNotifyChannel(),    // [sms] 註冊成功
// ];
$registerSuccessful = new RegisterSuccessfulEvent();
$bookCourse = new BookCourseEvent();
$cancelCourse = new CancelCourseEvent();
$registerSuccessful->dispatch($user1);
$bookCourse->dispatch($user2);
$cancelCourse->dispatch($user3);