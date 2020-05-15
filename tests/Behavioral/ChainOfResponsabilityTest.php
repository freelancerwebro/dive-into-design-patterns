<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\ChainOfResponsability\ConsoleLogger;
use DP\Behavioral\ChainOfResponsability\FileLogger;
use DP\Behavioral\ChainOfResponsability\ErrorLogger;
use DP\Behavioral\ChainOfResponsability\AbstractLogger;

class ChainOfResponsabilityTest extends TestCase
{
    protected function getChainOfLoggers()
    {
        $errorLogger = new ErrorLogger(AbstractLogger::ERROR);
        $fileLogger = new FileLogger(AbstractLogger::DEBUG);
        $consoleLogger = new ConsoleLogger(AbstractLogger::INFO);

        $errorLogger->setNextLogger($fileLogger);
        $fileLogger->setNextLogger($consoleLogger);

        return $errorLogger;
    }

    public function testConsoleLoggerCanWrite()
    {
        $message = "Testing write method";
        $logger = new ConsoleLogger(AbstractLogger::INFO);
        $logger->logMessage(AbstractLogger::INFO, $message);

        $expected = "Console logger: " . $message . "\n";
        $this->expectOutputString($expected);
    }

    public function testChainInfoMessage()
    {
        $message = "This is an information.";
        $loggerChain = $this->getChainOfLoggers();
        $loggerChain->logMessage(AbstractLogger::INFO, "This is an information.");

        $expected = "Console logger: " . $message . "\n";
        $this->expectOutputString($expected);
    }

    public function testChainDebugMessage()
    {
        $message = "This is a debug.";
        $loggerChain = $this->getChainOfLoggers();
        $loggerChain->logMessage(AbstractLogger::DEBUG, $message);

        $expected = "File logger: " . $message . "\n";
        $expected .= "Console logger: " . $message . "\n";
        $this->expectOutputString($expected);
    }

    public function testChainErrorMessage()
    {
        $message = "This is an error.";
        $loggerChain = $this->getChainOfLoggers();
        $loggerChain->logMessage(AbstractLogger::ERROR, $message);

        $expected = "Error logger: " . $message . "\n";
        $expected .= "File logger: " . $message . "\n";
        $expected .= "Console logger: " . $message . "\n";
        $this->expectOutputString($expected);
    }
}