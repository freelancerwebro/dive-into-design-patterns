<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\TemplateMethod\Football;
use DP\Behavioral\TemplateMethod\Tennis;

class TemplateMethodTest extends TestCase
{
    public function testFootballPlayMethod()
    {
        $game = new Football();
        $game->play();

        $expected = "Football game initialized\nFootball game started\nFootball game ended\n";
        $this->expectOutputString($expected);
    }

    public function testTennisPlayMethod()
    {
        $game = new Tennis();
        $game->play();

        $expected = "Tennis game initialized\nTennis game started\nTennis game ended\n";
        $this->expectOutputString($expected);
    }
}