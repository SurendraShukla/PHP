<?php

namespace design_patterns\Factory\FactoryMethod\Computer;


class ServerFactory extends ComputerFactory
{
    public function getComputer(
        string $type,
        string $ram,
        string $hdd,
        string $cpu
    ) {
        new Server($ram, $hdd, $cpu);
    }

}
