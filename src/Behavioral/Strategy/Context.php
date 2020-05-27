<?php
namespace DP\Behavioral\Strategy;

class Context
{
    private $operation;

    public function __construct(Operation $operation)
    {
        $this->operation = $operation;
    }

    public function calculateOperation(int $a, int $b)
    {
        return $this->operation->calculate($a, $b);
    }
}