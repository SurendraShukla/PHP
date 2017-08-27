<?php
namespace design_patterns\Factory\AbstractFactory\ComputerShop;

class AverageBudgetMachine extends LowBudgetMachine {
    public function getRam(): IProcessor {
        return new ExpensiveProcessor();
    }
}
