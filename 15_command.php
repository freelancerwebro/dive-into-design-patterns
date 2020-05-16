<?php
require "vendor/autoload.php";

use DP\Behavioral\Command\Stock;
use DP\Behavioral\Command\BuyOrder;
use DP\Behavioral\Command\SellOrder;
use DP\Behavioral\Command\Broker;

$googleStock = new Stock("GOOGL", 3);
$appleStock = new Stock("AAPL", 2);

$buyOrder = new BuyOrder($googleStock);
$sellOrder = new SellOrder($appleStock);

$broker = new Broker();
$broker->takeOrder($buyOrder);
$broker->takeOrder($sellOrder);

$broker->placeOrders();