<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;

use DP\Structural\Composite\OneBook;
use DP\Structural\Composite\SeveralBooks;

class CompositeTest extends TestCase
{
    public function testOneBookInfoAndBookCount()
    {
        $title = "Clean Code";
        $author = "Robert Martin";
        $book = new OneBook($title, $author);

        $this->assertSame("Clean Code by Robert Martin", $book->getBookInfo(1));
        $this->assertSame(1, $book->getBookCount());
    }

    public function testSeveralBooksInfoAndBookCount()
    {
        $firstBook = new OneBook('Head First Javascript', 'Eric Freeman');
        $secondBook = new OneBook('Clean Code', 'Robert Martin');
        $books = new SeveralBooks();

        $booksCount = $books->addBook($firstBook);
        $this->assertSame($firstBook->getBookInfo(1) , $books->getBookInfo($booksCount));
        $this->assertSame(1, $books->getBookCount());

        $booksCount = $books->addBook($secondBook);
        $this->assertSame($secondBook->getBookInfo(1) , $books->getBookInfo($booksCount));
        $this->assertSame(2, $books->getBookCount());
    }
}