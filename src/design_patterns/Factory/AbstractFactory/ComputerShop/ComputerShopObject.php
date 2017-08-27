<?php

namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class ComputerShopObject {

    private $category;

    public function __construct(IMachineFactory $category)
    {
        $this->category = $category;
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
