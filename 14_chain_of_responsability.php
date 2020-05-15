<?php
require "vendor/autoload.php";

use DP\Behavioral\ChainOfResponsability\ConsoleLogger;
use DP\Behavioral\ChainOfResponsability\FileLogger;
use DP\Behavioral\ChainOfResponsability\ErrorLogger;
use DP\Behavioral\ChainOfResponsability\AbstractLogger;

function getChainOfLoggers()
{
    $errorLogger = new ErrorLogger(AbstractLogger::ERROR);
    $fileLogger = new FileLogger(AbstractLogger::DEBUG);
    $consoleLogger = new ConsoleLogger(AbstractLogger::INFO);

    $errorLogger->setNextLogger($fileLogger);
    $fileLogger->setNextLogger($consoleLogger);

    return $errorLogger;
}

$loggerChain = getChainOfLoggers();

$loggerChain->logMessage(AbstractLogger::INFO, "This is an information.");
echo "\n";

$loggerChain->logMessage(AbstractLogger::DEBUG, "This is a debug.");
echo "\n";

$loggerChain->logMessage(AbstractLogger::ERROR, "This is an error.");
echo "\n";