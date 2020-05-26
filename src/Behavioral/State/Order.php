<?php
namespace DP\Behavioral\State;

class Order
{
    private $state;

    public static function create(): Order
    {
        $order = new self();
        $order->state = new StateCreated();
        return $order;
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function proceedToNext()
    {
        $this->state->proceedToNext($this);
    }

    public function toString()
    {
        return $this->state->toString();
    }
}