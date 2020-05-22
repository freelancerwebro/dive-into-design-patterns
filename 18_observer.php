<?php
require "vendor/autoload.php";

use DP\Behavioral\Observer\User;
use DP\Behavioral\Observer\UserObserver;

$observer = new UserObserver;

$user = new User();
$user->attach($observer);

$user->changeEmail("test@test.com");
$user->changeEmail("another_test@test.com");
print_r($observer->getChangedUsers());