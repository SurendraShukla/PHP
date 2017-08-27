<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class ExpensiveProcessor implements IProcessor {

    public function performOperation() {
        echo "\nOperation will perform quickly";
    }
}
