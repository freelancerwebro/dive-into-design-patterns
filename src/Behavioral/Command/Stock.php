<?php
namespace DP\Behavioral\Command;

class Stock
{
    private $name;
    private $quantity;

    public function __construct(string $name, int $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function buy(): void
    {
        echo "BUY | Stock name: " . $this->name . ", quantity: " . $this->quantity . "\n";
    }

    public function sell(): void
    {
        echo "SELL | Stock name: " . $this->name . ", quantity: " . $this->quantity . "\n";
    }
}