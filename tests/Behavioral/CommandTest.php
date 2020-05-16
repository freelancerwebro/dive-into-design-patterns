<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Command\Stock;
use DP\Behavioral\Command\BuyOrder;
use DP\Behavioral\Command\SellOrder;
use DP\Behavioral\Command\Broker;

class CommandTest extends TestCase
{
    public function testIfStockBuyMethodWorks()
    {
        $stockName     = "GOOGL";
        $stockQuantity = 3;

        $googleStock = new Stock($stockName, $stockQuantity);
        $googleStock->buy();

        $expected = "BUY | Stock name: " . $stockName . ", quantity: " . $stockQuantity . "\n";
        $this->expectOutputString($expected);
    }

    public function testIfStockSellMethodWorks()
    {
        $stockName     = "AAPL";
        $stockQuantity = 5;

        $googleStock = new Stock($stockName, $stockQuantity);
        $googleStock->sell();

        $expected = "SELL | Stock name: " . $stockName . ", quantity: " . $stockQuantity . "\n";
        $this->expectOutputString($expected);
    }
}