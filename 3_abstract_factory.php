<?php
require "vendor/autoload.php";

use DP\Creational\AbstractFactory\Factory\ComputerFactory;
use DP\Creational\AbstractFactory\Factory\PCFactory;
use DP\Creational\AbstractFactory\Factory\ServerFactory;

ComputerFactory::create(new PCFactory("1 GB", "500 GB", "2.2 Ghz"));
ComputerFactory::create(new ServerFactory("4 GB", "1 TB", "2.6 Ghz"));