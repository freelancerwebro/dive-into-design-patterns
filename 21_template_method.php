<?php
require "vendor/autoload.php";

use DP\Behavioral\TemplateMethod\Football;
use DP\Behavioral\TemplateMethod\Tennis;

$football = new Football();
$football->play();

echo "\n";

$tennis = new Tennis();
$tennis->play();