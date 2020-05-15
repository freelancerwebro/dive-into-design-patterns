<?php
namespace DP\Behavioral\ChainOfResponsability;

class ErrorLogger extends AbstractLogger
{
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message): void
    {
        echo "Error logger: " . $message . "\n";
    }
}