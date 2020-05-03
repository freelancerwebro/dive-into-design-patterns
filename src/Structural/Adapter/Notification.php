<?php
namespace DP\Structural\Adapter;

interface Notification
{
    public function send(string $title, string $message);
}