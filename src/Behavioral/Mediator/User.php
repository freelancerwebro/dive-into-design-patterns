<?php
namespace DP\Behavioral\Mediator;

class User
{
    private $name;

    private $chatRoom;

    public function __construct(ChatRoom $chatRoom)
    {
        $this->chatRoom = $chatRoom;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    public function sendMessage(string $message): void
    {
        $this->chatRoom->showMessage($this, $message);
    }
}