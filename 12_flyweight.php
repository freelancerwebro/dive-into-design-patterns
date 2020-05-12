<?php
require "vendor/autoload.php";

use DP\Structural\Flyweight\ShapeFactory;

$colors = ["Red", "Green", "Yellow", "Blue", "Orange", "Black"];

$radius = 100;

function getRandomColor($colors)
{
    return $colors[array_rand($colors, 1)];
}

function getRandomNumber()
{
    return mt_rand(1, 100);
}

for ($i = 0; $i < 10; $i++)
{
    $color = getRandomColor($colors);

    $circle = ShapeFactory::getCircle($color);
    $circle->setX(getRandomNumber());
    $circle->setY(getRandomNumber());
    $circle->setRadius($radius);
    $circle->draw();

    echo "\n\n";
}