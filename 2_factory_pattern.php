<?php
require "vendor/autoload.php";

use \DP\Creational\FactoryPattern\CarFactory;
use \DP\Creational\FactoryPattern\CarType;

CarFactory::create(CarType::SMALL);
CarFactory::create(CarType::SEDAN);
CarFactory::create(CarType::LUXURY);