<?php
namespace DP\Behavioral\Command;

class Broker
{
    private $orderList = [];

    public function takeOrder(OrderInterface $order): void
    {
        $this->orderList[] = $order;
    }

    public function placeOrders(): void
    {
        foreach ($this->orderList as $order)
        {
            $order->execute();
        }
        $this->orderList = [];
    }
}