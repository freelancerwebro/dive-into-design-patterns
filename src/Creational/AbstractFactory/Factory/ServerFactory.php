<?php
namespace DP\Creational\AbstractFactory\Factory;
use DP\Creational\AbstractFactory\Server;

class ServerFactory implements ComputerAbstractFactory
{
    public function __construct(string $ram, string $hdd, string $cpu)
    {
        $this->ram = $ram;
        $this->hdd = $hdd;
        $this->cpu = $cpu;
        echo "Create Server: ram = " . $ram . ", hdd = " . $hdd . ", cpu = " . $cpu . "\n\n";
    }

    public function create()
    {
        return new Server($this->ram, $this->hdd, $this->cpu);
    }
}