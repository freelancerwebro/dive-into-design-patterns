<?php
namespace DP\Creational\AbstractFactory\Factory;

class ComputerFactory
{
    public static function create(ComputerAbstractFactory $caf)
    {
        return $caf->create();
    }
}