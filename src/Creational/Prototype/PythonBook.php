<?php
namespace DP\Creational\Prototype;

class PythonBook extends Book
{
    public function __construct()
    {
        $this->topic = "Python";
    }

    public function __clone()
    {
        
    }
}