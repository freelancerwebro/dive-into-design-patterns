<?php
namespace DP\Creational\FactoryPattern;

class LuxuryCar extends Car
{
    public function __construct(string $type = null)
    {
        parent::__construct(CarType::LUXURY);
        $this->build();
    }

    public function build(): void
    {
        echo "Building luxury car\n\n";
    }
}