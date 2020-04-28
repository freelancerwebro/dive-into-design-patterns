<?php
namespace DP\Creational\FactoryPattern;

class SmallCar extends Car
{
    public function __construct(string $type = null)
    {
        parent::__construct(CarType::SMALL);
        $this->build();
    }

    public function build(): void
    {
        echo "Building small car\n\n";
    }
}