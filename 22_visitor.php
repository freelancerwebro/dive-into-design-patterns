<?php
require "vendor/autoload.php";

use DP\Behavioral\Visitor\Computer;
use DP\Behavioral\Visitor\ComputerPartDisplayVisitor;

$computer = new Computer();
$computer->accept(new ComputerPartDisplayVisitor());