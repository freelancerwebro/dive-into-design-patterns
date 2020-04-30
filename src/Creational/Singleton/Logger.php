<?php
namespace DP\Creational\Singleton;

class Logger extends Singleton
{
    public static function log(string $message): void
    {
        $date = date('Y-m-d');
        echo sprintf("%s: %s\n", $date, $message);
    }
}