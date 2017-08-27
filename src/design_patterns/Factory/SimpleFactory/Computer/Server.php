<?php

namespace design_patterns\Factory\SimpleFactory\Computer;


class Server extends Computer
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

    public function getRAM(): string
    {
        return $this->ram;
    }

    public function getHDD(): string
    {
        return $this->hdd;
    }

    public function getCPU(): string
    {
        return $this->cpu;
    }

}
