<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class ExpensiveHDD implements IHardDisk{

    public function storeData() {
        echo "\nData will take less time to store";
    }
}
