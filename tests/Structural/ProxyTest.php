<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Structural\Proxy\ProxyImage;

class ProxyTest extends TestCase
{
    public function testIfImageWasLoadedFromDisk()
    {
        $fileName = "test.jpg";

        $image = new ProxyImage($fileName);
        $image->display();

        $expected = "Loading file from disk $fileName\n";
        $expected .= "Displaying $fileName\n";
        $this->expectOutputString($expected);
    }

    public function testIfImageWasNotLoadedFromDiskIfCalledMultipleTimes()
    {
        $fileName = "test.jpg";

        $image = new ProxyImage($fileName);
        $image->display();
        $image->display();
        $image->display();

        $expected = "Loading file from disk $fileName\n";
        $expected .= "Displaying $fileName\n";
        $expected .= "Displaying $fileName\n";
        $expected .= "Displaying $fileName\n";
        $this->expectOutputString($expected);
    }
}