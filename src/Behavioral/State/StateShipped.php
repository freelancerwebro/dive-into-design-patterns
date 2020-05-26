<?php
namespace DP\Behavioral\State;

class StateShipped implements State
{
    public function proceedToNext(Order $order)
    {
        $order->setState(new StateDone());
    }

    public function toString(): string
    {
        return "shipped";
    }
}