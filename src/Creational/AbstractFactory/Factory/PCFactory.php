<?php
namespace DP\Creational\AbstractFactory\Factory;
use DP\Creational\AbstractFactory\PC;

class PCFactory implements ComputerAbstractFactory
{
    public function __construct(string $ram, string $hdd, string $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
        echo "Create PC: ram = " . $ram . ", hdd = " . $hdd . ", cpu = " . $cpu . "\n\n";
    }

    public function create()
    {
        return new PC($this->ram, $this->hdd, $this->cpu);
    }
}