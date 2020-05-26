<?php
namespace DP\Behavioral\State;

interface State
{
    public function proceedToNext(Order $order);
    public function toString(): string;
}