<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Structural\Flyweight\ShapeFactory;
use DP\Structural\Flyweight\Circle;

class FlyweightTest extends TestCase
{
    private $colors = ["Red", "Green", "Yellow", "Blue", "Orange", "Black"];

    public function testIfIsInstanceOfCircle()
    {
        $circle = ShapeFactory::getCircle("Red");

        $this->expectOutputString("Create new Circle of color: Red\n");
        $this->assertInstanceOf(Circle::class, $circle);
    }
}