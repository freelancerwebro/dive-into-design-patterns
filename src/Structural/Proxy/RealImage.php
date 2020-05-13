<?php
namespace DP\Structural\Proxy;

class RealImage implements ImageInterface
{
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk();
    }

    public function display(): void
    {
        echo "Displaying " . $this->fileName . "\n";
    }

    public function loadFromDisk()
    {
        echo "Loading file from disk " . $this->fileName . "\n";
    }
}