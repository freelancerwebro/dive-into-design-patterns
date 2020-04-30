<?php
namespace DP\Creational\Prototype;

class PHPBook extends Book
{
    public function __construct()
    {
        $this->topic = "PHP";
    }

    public function __clone()
    {
        
    }
}