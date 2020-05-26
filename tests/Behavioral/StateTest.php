<?php
require "vendor/autoload.php";

use DP\Behavioral\State\Order;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testIsCreatedWithStateCreated()
    {
        $order = Order::create();
        $this->assertSame("created", $order->toString());
    }

    public function testCanMoveToStateShipped()
    {
        $order = Order::create();
        $order->proceedToNext();
        $this->assertSame("shipped", $order->toString());
    }

    public function testCanMoveToStateDone()
    {
        $order = Order::create();
        $order->proceedToNext();
        $order->proceedToNext();
        $this->assertSame("done", $order->toString());
    }

    public function testStateDoneIsLastOne()
    {
        $order = Order::create();
        $order->proceedToNext();
        $order->proceedToNext();
        $order->proceedToNext();
        $this->assertSame("done", $order->toString());
    }
}