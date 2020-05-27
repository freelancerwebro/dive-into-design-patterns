<?php
namespace DP\Behavioral\Strategy;

class OperationAdd implements Operation
{
    public function calculate(int $a, int $b)
    {
        return $a + $b;
    }
}