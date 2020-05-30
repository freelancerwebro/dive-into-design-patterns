<?php
namespace DP\Behavioral\Visitor;

class Keyboard implements ComputerPart
{
    public function accept(ComputerPartVisitor $visitor): void
    {
        $visitor->visitKeyboard($this);
    }
}