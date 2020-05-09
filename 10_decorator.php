<?php
require "vendor/autoload.php";

use DP\Structural\Decorator\DoubleRoomBooking;
use DP\Structural\Decorator\ExtraBed;
use DP\Structural\Decorator\Wifi;

$booking = new DoubleRoomBooking();
echo "desc = " . $booking->getDescription() . "\n";
echo "price = " . $booking->calculatePrice() . "\n";
echo "\n\n";

$booking = new DoubleRoomBooking();
$booking = new Wifi($booking);
echo "desc = " . $booking->getDescription() . "\n";
echo "price = " . $booking->calculatePrice() . "\n";
echo "\n\n";

$booking = new DoubleRoomBooking();
$booking = new Wifi($booking);
$booking = new ExtraBed($booking);
echo "desc = " . $booking->getDescription() . "\n";
echo "price = " . $booking->calculatePrice() . "\n";
echo "\n\n";