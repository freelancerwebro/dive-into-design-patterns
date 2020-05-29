<?php
namespace DP\Behavioral\TemplateMethod;

abstract class Game
{
    abstract public function initialize(): void;
    abstract public function startPlay(): void;
    abstract public function endPlay(): void;

    // template method
    final public function play(): void
    {
        $this->initialize();
        $this->startPlay();
        $this->endPlay();
    }
}