<?php
require "vendor/autoload.php";

use DP\Creational\Singleton\Config;

$user = "root";
$pass = "12345";

$config1 = Config::getInstance();
$config1->setValue("user", $user);
$config1->setValue("pass", $pass);

$config2 = Config::getInstance();
if ($user == $config2->getValue("user") && 
    $pass == $config2->getValue("pass")
) {
    echo "Config singleton works fine. \n\n";
}