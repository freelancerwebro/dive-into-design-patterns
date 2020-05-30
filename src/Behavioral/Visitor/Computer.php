<?php
namespace DP\Behavioral\Visitor;

class Computer implements ComputerPart
{
    private $parts;

    public function __construct()
    {
        $this->parts = [
            new Mouse(),
            new Keyboard(),
            new Monitor()
        ];
    }

    public function accept(ComputerPartVisitor $visitor): void
    {
        foreach ($this->parts as $part)
        {
            $part->accept($visitor);
        }

        $visitor->visitComputer($this);
    }
}