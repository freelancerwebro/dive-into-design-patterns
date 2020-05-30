<?php
namespace DP\Behavioral\Visitor;

class Mouse implements ComputerPart
{
    public function accept(ComputerPartVisitor $visitor): void
    {
        $visitor->visitMouse($this);
    }
}