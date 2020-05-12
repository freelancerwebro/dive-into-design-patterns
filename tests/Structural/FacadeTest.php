<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Structural\Facade\ShapeMaker;

class FacadeTest extends TestCase
{
    public function testIfDrawCircleWorks()
    {
        $this->expectOutputString("Circle draw");

        $shape = new ShapeMaker();
        $shape->drawCircle();
    }

    public function testIfDrawRectangleWorks()
    {
        $this->expectOutputString("Rectangle draw");
        
        $shape = new ShapeMaker();
        $shape->drawRectangle();
    }

    public function testIfDrawSquareWorks()
    {
        $this->expectOutputString("Square draw");
        
        $shape = new ShapeMaker();
        $shape->drawSquare();
    }
}