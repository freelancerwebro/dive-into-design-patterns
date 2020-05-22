<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Observer\User;
use DP\Behavioral\Observer\UserObserver;

class ObserverTest extends TestCase
{
    public function testChangeUserEmailUpdateObserver()
    {
        $observer = new UserObserver;

        $user = new User();
        $user->attach($observer);

        $user->changeEmail("test@test.com");
        $user->changeEmail("another_test@test.com");
        $this->assertCount(2, $observer->getChangedUsers());
    }
}