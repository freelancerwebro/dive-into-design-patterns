<?php
require "vendor/autoload.php";

use DP\Behavioral\State\Order;

$order = Order::create();
echo $order->toString() . "\n\n";

$order2 = Order::create();
$order2->proceedToNext();
echo $order2->toString() . "\n\n";

$order3 = Order::create();
$order3->proceedToNext();
$order3->proceedToNext();
echo $order3->toString() . "\n\n";