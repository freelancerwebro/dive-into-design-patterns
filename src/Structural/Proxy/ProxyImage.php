<?php
namespace DP\Structural\Proxy;

class ProxyImage implements ImageInterface
{
    private $realImage;
    private $fileName;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    public function display(): void
    {
        if (empty($this->realImage))
        {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}