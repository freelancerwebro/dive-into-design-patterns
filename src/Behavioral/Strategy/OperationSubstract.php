<?php
namespace DP\Behavioral\Strategy;

class OperationSubstract implements Operation
{
    public function calculate(int $a, int $b)
    {
        return $a - $b;
    }
}