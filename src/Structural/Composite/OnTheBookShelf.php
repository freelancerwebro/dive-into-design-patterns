<?php
namespace DP\Structural\Composite;

abstract class OnTheBookShelf
{
    abstract public function getBookInfo(int $previousBook);
    abstract public function getBookCount();
    abstract public function setBookCount(int $newCount);
    abstract public function addBook($oneBook);
    abstract public function removeBook($oneBook);
}