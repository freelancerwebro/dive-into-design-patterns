<?php
require "vendor/autoload.php";

use DP\Behavioral\ChainOfResponsability\ConsoleLogger;

$logger = new ConsoleLogger(ConsoleLogger::INFO);
$logger->logMessage(ConsoleLogger::INFO, "This is an information.");