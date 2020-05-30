<?php
namespace DP\Behavioral\Visitor;

interface ComputerPart
{
    public function accept(ComputerPartVisitor $visitor): void;
}