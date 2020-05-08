<?php
require "vendor/autoload.php";

use DP\Structural\Composite\OneBook;
use DP\Structural\Composite\SeveralBooks;

$firstBook = new OneBook('Head First Javascript', 'Eric Freeman');
echo $firstBook->getBookInfo(1) . "\n";

$secondBook = new OneBook('Clean Code', 'Robert Martin');
echo $secondBook->getBookInfo(1) . "\n";

echo "\n\n";

$books = new SeveralBooks();

$booksCount = $books->addBook($firstBook);
echo $books->getBookInfo($booksCount) . "\n";

$booksCount = $books->addBook($secondBook);
echo $books->getBookInfo($booksCount) . "\n";