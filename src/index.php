<?php
require_once 'vendor/autoload.php';

// use App\HelloWorld;
use App\User;
use App\Zhtw;
use App\EmailNotifyChannel;
use App\SMSNotifyChannel;
use App\RegisterSuccessfulEvent;

// $helloWorld = new HelloWorld();
// echo $helloWorld->say();

$user = new User(1, new Zhtw());
$user = new User(1, new Enus());

$notifyChannels = [
    new EmailNotifyChannel(),  // 註冊成功 -> [email] 註冊成功 / [email] register successful
    new SMSNotifyChannel(),    // [sms] 註冊成功
];
$registerSuccessful = new RegisterSuccessfulEvent($notifyChannels);
$registerSuccessful->dispatch($user);