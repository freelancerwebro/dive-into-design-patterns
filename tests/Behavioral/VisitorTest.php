<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Visitor\Computer;
use DP\Behavioral\Visitor\ComputerPartDisplayVisitor;

class VisitorTest extends TestCase
{
    public function testVisitorAcceptComputerParts()
    {
        $computer = new Computer();
        $computer->accept(new ComputerPartDisplayVisitor());

        $expected = "Display mouse\nDisplay keyboard\nDisplay monitor\nDisplay computer\n";
        $this->expectOutputString($expected);
    }
}