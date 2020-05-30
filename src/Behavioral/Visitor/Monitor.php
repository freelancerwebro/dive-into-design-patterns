<?php
namespace DP\Behavioral\Visitor;

class Monitor implements ComputerPart
{
    public function accept(ComputerPartVisitor $visitor): void
    {
        $visitor->visitMonitor($this);
    }
}