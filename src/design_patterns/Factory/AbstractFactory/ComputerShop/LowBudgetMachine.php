<?php
 namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class LowBudgetMachine implements IMachineFactory{

    public function getRam(): IProcessor {
        return new CheapProcessor();
    }

    public function getHardDisk(): IHardDisk {
        return new CheapHDD();
    }

    public function getMonitor(): IMonitor {
        return new LowResolutionMonitor();
    }

}
