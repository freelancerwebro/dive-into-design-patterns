<?php
namespace DP\Behavioral\Mediator;

class ChatRoom
{
    public function showMessage(User $user, string $message): void
    {
        echo "[" . $user->getName() . "] : " . $message . "\n";
    }
}