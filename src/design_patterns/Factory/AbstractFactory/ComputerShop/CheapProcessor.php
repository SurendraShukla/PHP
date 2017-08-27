<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class CheapProcessor implements IProcessor{
    public function performOperation() {
        echo "\nOperation will perform Slowly";
    }
}
