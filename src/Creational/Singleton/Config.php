<?php
namespace DP\Creational\Singleton;

class Config extends Singleton
{
    private $list = [];

    public function getValue(string $key): string
    {
        return $this->list[$key];
    }

    public function setValue(string $key, string $value): void
    {
        $this->list[$key] = $value;
    }
}