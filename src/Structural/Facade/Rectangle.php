<?php
namespace DP\Structural\Facade;

class Rectangle implements ShapeInterface
{
    public function draw(): void
    {
        echo "Rectangle draw";
    }
}