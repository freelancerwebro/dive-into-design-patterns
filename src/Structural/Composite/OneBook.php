<?php
namespace DP\Structural\Composite;

class OneBook extends OnTheBookShelf
{
    private $title;
    private $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getBookInfo($bookToGet) {
        if ($bookToGet != 1) {
            return false;
        }
        return $this->title." by ".$this->author;
    }

    public function getBookCount() {
        return 1;
    }

    public function setBookCount($newCount) {
        return false;
    }

    public function addBook($oneBook) {
        return false;
    }
    
    public function removeBook($oneBook) {
        return false;
    }
}