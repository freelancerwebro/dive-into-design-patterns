<?php
namespace DP\Structural\Facade;

class Circle implements ShapeInterface
{
    public function draw(): void
    {
        echo "Circle draw";
    }
}