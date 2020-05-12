<?php
namespace DP\Structural\Flyweight;

class ShapeFactory
{
    private static $circles = [];

    public static function getCircle(string $color)
    {
        if (!isset(self::$circles[$color])) {
            $circle = new Circle($color);
            self::$circles[$color] = $circle;
            echo "Create new Circle of color: " . $color . "\n";
        }
        return self::$circles[$color];
    }
}