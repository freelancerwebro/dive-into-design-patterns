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

        $stock = new Stock($stockName, $stockQuantity);
        $stock->buy();

        $expected = "BUY | Stock name: " . $stockName . ", quantity: " . $stockQuantity . "\n";
        $this->expectOutputString($expected);
    }

    public function testIfStockSellMethodWorks()
    {
        $stockName     = "AAPL";
        $stockQuantity = 5;

        $stock = new Stock($stockName, $stockQuantity);
        $stock->sell();

        $expected = "SELL | Stock name: " . $stockName . ", quantity: " . $stockQuantity . "\n";
        $this->expectOutputString($expected);
    }

    public function testIfSellOrderWorks()
    {
        $stockName     = "AAPL";
        $stockQuantity = 5;

        $stock = new Stock($stockName, $stockQuantity);
        $sellOrder = new SellOrder($stock);

        $sellOrder->execute();

        $expected = "SELL | Stock name: " . $stockName . ", quantity: " . $stockQuantity . "\n";
        $this->expectOutputString($expected);
    }

    public function testIfBuyOrderWorks()
    {
        $stockName     = "AAPL";
        $stockQuantity = 1;

        $stock = new Stock($stockName, $stockQuantity);
        $buyOrder = new BuyOrder($stock);

        $buyOrder->execute();

        $expected = "BUY | Stock name: " . $stockName . ", quantity: " . $stockQuantity . "\n";
        $this->expectOutputString($expected);
    }

    public function testIfBrokerCanAddOrders()
    {
        $googleStock = new Stock("GOOGL", 3);
        $appleStock = new Stock("AAPL", 2);

        $buyOrder = new BuyOrder($googleStock);
        $sellOrder = new SellOrder($appleStock);

        $broker = new Broker();
        $broker->takeOrder($buyOrder);
        $broker->takeOrder($sellOrder);

        $expected = [
            $buyOrder,
            $sellOrder
        ];
        $this->assertSame($expected, $broker->getOrderList());
    }

    public function testIfBrokerOrdersWork()
    {
        $googleStock = new Stock("GOOGL", 3);
        $appleStock = new Stock("AAPL", 2);

        $buyOrder = new BuyOrder($googleStock);
        $sellOrder = new SellOrder($appleStock);

        $broker = new Broker();
        $broker->takeOrder($buyOrder);
        $broker->takeOrder($sellOrder);

        $broker->placeOrders();

        $expected = [];
        $this->assertSame($expected, $broker->getOrderList());

        $expected = "BUY | Stock name: GOOGL, quantity: 3\n";
        $expected .= "SELL | Stock name: AAPL, quantity: 2\n";
        $this->expectOutputString($expected);
    }
}