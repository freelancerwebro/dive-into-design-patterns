<?php
require "vendor/autoload.php";

use PHPUnit\Framework\TestCase;
use DP\Behavioral\Iterator\Book;
use DP\Behavioral\Iterator\BookList;

class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList()
    {
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

        $expected = [
            "Clean Code by Robert Martin",
            "Dive into Design Patterns by Alexander Shvets",
            "Head First Design Patterns by Eric Freeman"
        ];

        $this->assertSame($expected, $books);
    }

    public function testCanIterateOverBookListAfterRemovingBook()
    {
        $book1 = new Book("Clean Code", "Robert Martin");
        $book2 = new Book("Dive into Design Patterns", "Alexander Shvets");

        $bookList = new BookList();
        $bookList->addBook($book1);
        $bookList->addBook($book2);
        $bookList->removeBook($book2);

        $books = [];
        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        $expected = [
            "Clean Code by Robert Martin",
        ];

        $this->assertSame($expected, $books);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('Clean Code', 'Robert Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }

    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Robert Martin');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }
}