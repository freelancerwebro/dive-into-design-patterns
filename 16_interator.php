<?php
require "vendor/autoload.php";

use DP\Behavioral\Iterator\Book;
use DP\Behavioral\Iterator\BookList;

$book1 = new Book("Clean Code", "Robert Martin");
$book2 = new Book("Dive into Design Patterns", "Alexander Shvets");
$book3 = new Book("Head First Design Patterns", "Eric Freeman");

$bookList = new BookList();
$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book3);

$books = [];
foreach ($bookList as $book) {
    $books[] = $book->getAuthorAndTitle();
}
print_r($books);

$bookList->removeBook($book2);

$books2 = [];
foreach ($bookList as $book) {
    $books2[] = $book->getAuthorAndTitle();
}
print_r($books2);

echo "count = " . count($bookList) . "\n\n";
