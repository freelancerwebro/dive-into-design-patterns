<?php
namespace DP\Behavioral\ChainOfResponsability;

class FileLogger extends AbstractLogger
{
    public function __construct(int $level)
    {
        $this->level = $level;
    }

    protected function write(string $message): void
    {
        echo "File logger: " . $message . "\n";
    }
}