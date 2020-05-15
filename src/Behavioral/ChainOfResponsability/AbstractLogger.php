<?php
namespace DP\Behavioral\ChainOfResponsability;

abstract class AbstractLogger
{
    const INFO  = 1;
    const DEBUG = 2;
    const ERROR = 3;

    protected $level;

    protected $nextLogger;

    public function setNextLogger(AbstractLogger $nextLogger): void
    {
        $this->nextLogger = $nextLogger;
    }

    public function logMessage(int $level, string $message): void
    {
        if ($this->level <= $level)
        {
            $this->write($message);
        }
        if (!empty($this->nextLogger))
        {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    abstract protected function write(string $message): void;
}