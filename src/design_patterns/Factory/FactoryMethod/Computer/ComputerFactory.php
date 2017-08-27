<?php

namespace design_patterns\Factory\FactoryMethod\Computer;


abstract class ComputerFactory
{
    public abstract function getComputer(string $type, string $ram, string $hdd, string $cpu): Computer;

}
