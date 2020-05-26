<?php
namespace DP\Behavioral\State;

class StateCreated implements State
{
    public function proceedToNext(Order $order)
    {
        $order->setState(new StateShipped());
    }

    public function toString(): string
    {
        return "created";
    }
}