<?php

namespace design_patterns\Factory\FactoryMethod\Computer;


class ServerFactory extends ComputerFactory
{
    public function getComputer(
        string $ram,
        string $hdd,
        string $cpu
    ): Computer {
        return new Server($ram, $hdd, $cpu);
    }

}
