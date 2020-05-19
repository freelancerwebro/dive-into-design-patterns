<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Mediator\ChatRoom;
use DP\Behavioral\Mediator\User;

class MediatorTest extends TestCase
{
    public function testUserGetterAndSetter()
    {
        $chatRoom = new ChatRoom();
        $john = (new User($chatRoom))->setName("John");

        $this->assertSame("John", $john->getName());
    }

    public function testOneUserSendMessage()
    {
        $message = "Hi Paul!";
        $chatRoom = new ChatRoom();
        $john = (new User($chatRoom))->setName("John");

        $john->sendMessage($message);

        $expected = "[" . $john->getName() . "] : " . $message . "\n";
        $this->expectOutputString($expected);
    }

    public function testMultipleUserSendMessages()
    {
        $chatRoom = new ChatRoom();

        $john = (new User($chatRoom))->setName("John");
        $alan = (new User($chatRoom))->setName("Alan");
        $smith = (new User($chatRoom))->setName("Smith");

        $john->sendMessage("Hello guys!");
        $alan->sendMessage("Heey John! How are you?");
        $smith->sendMessage("Hi guys!");

        $expected = "[John] : Hello guys!\n";
        $expected .= "[Alan] : Heey John! How are you?\n";
        $expected .= "[Smith] : Hi guys!\n";
        $this->expectOutputString($expected);
    }
}