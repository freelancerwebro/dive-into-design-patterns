<?php
namespace DP\Creational\AbstractFactory;

abstract class Computer
{
    private $ram;
    private $hdd;
    private $cpu;

    public function __construct(string $ram, string $hdd, string $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function getHdd()
    {
        return $this->hdd;
    }

    public function getCpu()
    {
        return $this->cpu;
    }
}