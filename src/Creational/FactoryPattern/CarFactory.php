<?php
namespace DP\Creational\FactoryPattern;

class CarFactory {
    public static function create(string $type)
    {
        switch ($type)
        {
            case 'small':
                return new SmallCar();

            case 'sedan':
                return new SedanCar();

            case 'luxury':
                return new LuxuryCar();    

            default:
                throw new \Exception('Car type not available!');
                break;
        }
    }
}