<?php
namespace DP\Behavioral\State;

class StateDone implements State
{
    public function proceedToNext(Order $order)
    {
        // do nothing
    }

    public function toString(): string
    {
        return "done";
    }
}