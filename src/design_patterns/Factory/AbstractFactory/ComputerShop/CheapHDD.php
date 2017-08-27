<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class CheapHDD implements IHardDisk {

    public function storeData() {
        echo "\nData will take more time to store";
    }

}
