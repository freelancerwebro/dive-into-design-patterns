<?php
require "vendor/autoload.php";

use DP\Creational\Singleton\Config;
use DP\Creational\Singleton\Logger;

$user = "root";
$pass = "12345";

$config1 = Config::getInstance();
$config1->setValue("user", $user);
$config1->setValue("pass", $pass);

$config2 = Config::getInstance();
if ($user == $config2->getValue("user") && 
    $pass == $config2->getValue("pass")
) {
    Logger::log("Config has one instance.");
} else {
    Logger::log("Config has multiple instances.");
}

$log1 = Logger::getInstance();
$log2 = Logger::getInstance();
if ($log1 == $log2) {
    Logger::log("Logger has one instance.");
} else {
    Logger::log("Logger has multiple instances.");
}

