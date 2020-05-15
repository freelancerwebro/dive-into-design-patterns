<?php
namespace DP\Behavioral\ChainOfResponsability;

class ConsoleLogger extends AbstractLogger
{
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message): void
    {
        echo "Console logger: " . $message . "\n";
    }
}