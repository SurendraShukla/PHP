<?php

namespace design_patterns\Factory\FactoryMethod\Computer;


class PCFactory extends ComputerFactory
{
    public function getComputer(
        string $type,
        string $ram,
        string $hdd,
        string $cpu
    ): Computer {
        return new PC($ram, $hdd, $cpu);
    }

}

