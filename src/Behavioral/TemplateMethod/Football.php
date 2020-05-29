<?php
namespace DP\Behavioral\TemplateMethod;

class Football extends Game
{
    public function initialize(): void
    {
        echo "Football game initialized\n";
    }

    public function startPlay(): void
    {
        echo "Football game started\n";
    }

    public function endPlay(): void
    {
        echo "Football game ended\n";
    }
}