<?php
require "vendor/autoload.php";

use DP\Behavioral\Mediator\ChatRoom;
use DP\Behavioral\Mediator\User;

$chatRoom = new ChatRoom();

$john = (new User($chatRoom))->setName("John");
$paul = (new User($chatRoom))->setName("Paul");

$john->sendMessage("Hi Paul!");
$paul->sendMessage("Heey! how are you John?");