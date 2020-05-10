<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Structural\Adapter\EmailNotification;

class AdapterTest extends TestCase
{
    public function testEmailNotificationOutputWorks()
    {
        $title = "Website is down";
        $message = "Our website is not responding. Call admins and bring it up!";
        $email = "admin@test.com";
        $expected = "Send email with title '$title' to '$email' that says '$message'\n";
        $this->expectOutputString($expected);

        $notification = new EmailNotification($email);
        $notification->send($title, $message);
    }
}