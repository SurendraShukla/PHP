<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class HighBudgetMachine implements IMachineFactory{

    public function getRam(): IProcessor {
        return new ExpensiveProcessor();
    }

    public function getHardDisk(): IHardDisk {
        return new ExpensiveHDD();
    }

    public function getMonitor(): IMonitor {
        return new HighResolutionMonitor();
    }

}
