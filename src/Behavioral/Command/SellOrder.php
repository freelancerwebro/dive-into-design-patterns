<?php
namespace DP\Behavioral\Command;

class SellOrder implements OrderInterface
{
    private $stock;

    public function __construct(Stock $stock)
    {
        $this->stock = $stock;
    }

    public function execute(): void
    {
        $this->stock->sell();
    }
}