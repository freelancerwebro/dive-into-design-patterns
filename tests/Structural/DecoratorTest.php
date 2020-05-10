<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Structural\Decorator\DoubleRoomBooking;
use DP\Structural\Decorator\Wifi;
use DP\Structural\Decorator\ExtraBed;

class DecoratorTest extends TestCase
{
    public function testCalculatePriceForDoubleRoom()
    {
        $booking = new DoubleRoomBooking();

        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame("double room", $booking->getDescription());
    }

    public function testCalculatePriceForDoubleRoomWithWifi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);

        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame("double room with wifi", $booking->getDescription());
    }

    public function testCalculatePriceForDoubleRoomWithWifiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new Wifi($booking);
        $booking = new ExtraBed($booking);

        $this->assertSame(72, $booking->calculatePrice());
        $this->assertSame("double room with wifi with extra bed", $booking->getDescription());     
    }
}