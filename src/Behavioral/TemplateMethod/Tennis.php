<?php
namespace DP\Behavioral\TemplateMethod;

class Tennis extends Game
{
    public function initialize(): void
    {
        echo "Tennis game initialized\n";
    }

    public function startPlay(): void
    {
        echo "Tennis game started\n";
    }

    public function endPlay(): void
    {
        echo "Tennis game ended\n";
    }
}