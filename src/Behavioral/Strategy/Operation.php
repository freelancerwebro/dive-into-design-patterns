<?php
namespace DP\Behavioral\Strategy;

interface Operation
{
    public function calculate(int $a, int $b);
}