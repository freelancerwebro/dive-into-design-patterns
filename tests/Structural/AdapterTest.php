<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Structural\Adapter\EmailNotification;
use DP\Structural\Adapter\SlackNotification;
use DP\Structural\Adapter\SlackApi;

class AdapterTest extends TestCase
{
    public function testIfEmailNotificationOutputWorks()
    {
        $title = "Website is down";
        $message = "Our website is not responding. Call admins and bring it up!";
        $email = "admin@test.com";
        $expected = "Send email with title '$title' to '$email' that says '$message'\n";
        $this->expectOutputString($expected);

        $notification = new EmailNotification($email);
        $notification->send($title, $message);
    }

    public function testIfSlackNotificationOutputWorks()
    {
        $title = "Website is down";
        $message = "Our website is not responding. Call admins and bring it up!";
        $email = "admin@test.com";
        $slackLogin = "test.com";
        $slackApiKey = "XXXXXXXXX-API-KEY-XXXXXXXXX";
        $slackChatId = "Admins";
        $slackMessage = "#" . $title . " #" . strip_tags($message);
        $expected = "Logged into a slack account $slackLogin\nPosted following message into the '$slackChatId' chat: '$slackMessage'\n";
        $this->expectOutputString($expected);

        $slackApi = new SlackApi($slackLogin, $slackApiKey);
        $notification = new SlackNotification($slackApi, $slackChatId);
        $notification->send($title, $message);
    }
}