<?php

namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class ComputerShopSwitch {

    private $category;

    public function __construct(string $categoryType)
    {
        switch ($categoryType) {
            case "high":
                $this->category = new HighBudgetMachine();
                break;
            case "low":
                $this->category = new LowBudgetMachine();
                break;
            default:
                $this->category = new AverageBudgetMachine();
                break;
        }
    }

    public function assembleMachine()
    {
        $processor = $this->category->getRam();
        $hdd = $this->category->getHardDisk();
        $monitor = $this->category->getMonitor();

        //use all three and create machine
        $processor->performOperation();
        $hdd->storeData();
        $monitor->displayPicture();
    }

}
