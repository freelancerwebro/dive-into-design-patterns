<?php
namespace DP\Creational\FactoryPattern;

class SedanCar extends Car
{
    public function __construct(string $type = null)
    {
        parent::__construct(CarType::SEDAN);
        $this->build();
    }

    public function build(): void
    {
        echo "Building sedan car\n\n";
    }
}