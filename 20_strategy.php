<?php
require "vendor/autoload.php";

use DP\Behavioral\Strategy\Context;
use DP\Behavioral\Strategy\OperationAdd;
use DP\Behavioral\Strategy\OperationSubstract;


$context = new Context(new OperationAdd());
echo "10 + 5 = " . $context->calculateOperation(10, 5) . "\n\n";


$context = new Context(new OperationSubstract());
echo "10 - 5 = " . $context->calculateOperation(10, 5). "\n\n";