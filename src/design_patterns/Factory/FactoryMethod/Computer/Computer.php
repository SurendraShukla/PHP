<?php

namespace design_patterns\Factory\FactoryMethod\Computer;


abstract class Computer
{
    public abstract function getRAM(): string;

    public abstract function getHDD(): string;

    public abstract function getCPU(): string;

    public function __toString()
    {
        return "RAM= ".$this->getRAM(). ", HDD=".$this->getHDD().", CPU="
            .$this->getCPU();
    }

}