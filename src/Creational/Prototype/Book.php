<?php
namespace DP\Creational\Prototype;

abstract class Book
{
    protected $title;
    protected $topic;
    abstract function __clone();

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTopic()
    {
        return $this->topic;
    }
}