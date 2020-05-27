<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Strategy\Context;
use DP\Behavioral\Strategy\OperationAdd;
use DP\Behavioral\Strategy\OperationSubstract;

class StrategyTest extends TestCase
{
    public function testAddTwoNumbersOperation()
    {
        $context = new Context(new OperationAdd());
        $this->assertSame(15, $context->calculateOperation(10, 5));
    }

    public function testSubstractTwoNumbersOperation()
    {
        $context = new Context(new OperationSubstract());
        $this->assertSame(5, $context->calculateOperation(10, 5));
    }
}