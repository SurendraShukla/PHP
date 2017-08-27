<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

interface IMachineFactory {
    public function getRam(): IProcessor;
    public function getHardDisk(): IHardDisk;
    public function getMonitor(): IMonitor;
}
