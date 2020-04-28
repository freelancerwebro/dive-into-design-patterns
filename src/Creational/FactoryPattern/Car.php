<?php
namespace DP\Creational\FactoryPattern;

abstract class Car
{   
    private $type;

    public function __construct(string $type)
    {
        $this->type = $type;
        $this->arrangeParts();
    }

    public function getType(): string
    {
        $this->type;
    }

    public function arrangeParts(): void
    {
        // one time processing
    }

    // subclass level processing
    abstract public function build(): void;
}