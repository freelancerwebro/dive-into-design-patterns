<?php
require "vendor/autoload.php";

use DP\Creational\Prototype\PHPBook;
use DP\Creational\Prototype\PythonBook;

$phpBook = new PHPBook();
$pythonBook = new PythonBook();

$book1 = clone $pythonBook;
$book1->setTitle("Python for dummies");
echo "Book 1 topic => ".$book1->getTopic()."\n";
echo "Book 1 title => ".$book1->getTitle()."\n";

echo "\n";

$book2 = clone $pythonBook;
$book2->setTitle("OReilly Learning Python 3");
echo "Book 2 topic => ".$book2->getTopic()."\n";
echo "Book 2 title => ".$book2->getTitle()."\n";

echo "\n";

$book3 = clone $phpBook;
$book3->setTitle("Introduction to PHP");
echo "Book 3 topic => ".$book3->getTopic()."\n";
echo "Book 3 title => ".$book3->getTitle()."\n";

echo "\n";

$book4 = clone $phpBook;
$book4->setTitle("OReilly Learning PHP 7");
echo "Book 4 topic => ".$book4->getTopic()."\n";
echo "Book 4 title => ".$book4->getTitle()."\n";