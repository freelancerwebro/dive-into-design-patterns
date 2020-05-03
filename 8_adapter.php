<?php
require "vendor/autoload.php";

use DP\Structural\Adapter\EmailNotification;
use DP\Structural\Adapter\SlackNotification;
use DP\Structural\Adapter\Notification;
use DP\Structural\Adapter\SlackApi;

function clientCode(Notification $notification)
{
    $notification->send("Website is down", "Our website is not responding. Call admins and bring it up!");
}

$notification = new EmailNotification("admin@test.com");
clientCode($notification);
echo "\n\n";

$slackApi = new SlackApi("test.com", "XXXXXXXXX-API-KEY-XXXXXXXXX");
$notification = new SlackNotification($slackApi, "Admins");
clientCode($notification);
echo "\n\n";