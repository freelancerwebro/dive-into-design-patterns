<?php
namespace DP\Behavioral\Visitor;

interface ComputerPartVisitor
{
    public function visitComputer(Computer $computer): void;
    public function visitMouse(Mouse $mouse): void;
    public function visitKeyboard(Keyboard $keyboard): void;
    public function visitMonitor(Monitor $monitor): void;
}