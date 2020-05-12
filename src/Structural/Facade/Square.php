<?php
namespace DP\Structural\Facade;

class Square implements ShapeInterface
{
    public function draw(): void
    {
        echo "Square draw";
    }
}