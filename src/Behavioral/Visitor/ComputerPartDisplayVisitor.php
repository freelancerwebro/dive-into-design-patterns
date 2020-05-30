<?php
namespace DP\Behavioral\Visitor;

class ComputerPartDisplayVisitor implements ComputerPartVisitor
{
    public function visitComputer(Computer $computer): void
    {
        echo "Display computer\n";
    }

    public function visitMouse(Mouse $mouse): void
    {
        echo "Display mouse\n";
    }

    public function visitKeyboard(Keyboard $keyboard): void
    {
        echo "Display keyboard\n";
    }

    public function visitMonitor(Monitor $monitor): void
    {
        echo "Display monitor\n";
    }
}