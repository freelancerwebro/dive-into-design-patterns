<?php
namespace DP\Structural\Flyweight;

class Circle implements ShapeInterface
{
    private $color;
    private $x;
    private $y;
    private $radius;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function draw(): void
    {
        echo "draw Circle [Color : " . $this->color . ", x : " . $this->x . ", y :" . $this->y . ", radius :" . $this->radius . "]";
    }
}