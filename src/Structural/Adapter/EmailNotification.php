<?php
namespace DP\Structural\Adapter;

class EmailNotification implements Notification
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function send(string $title, string $message): void
    {
        mail($this->email, $title, $message);
        echo "Send email with title '$title' to '{$this->email}' that says '$message'\n";
    }
}