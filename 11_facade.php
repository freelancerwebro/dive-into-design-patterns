<?php
require "vendor/autoload.php";

use DP\Structural\Facade\ShapeMaker;

$shape = new ShapeMaker;

$shape->drawCircle();
echo "\n\n";

$shape->drawRectangle();
echo "\n\n";

$shape->drawSquare();
echo "\n\n";