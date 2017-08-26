<?php

namespace design_patterns\Template\Sandwich;


abstract class Sandwich
{

    final public function makeSandwich()
    {
        $this->cutBreadLoaf();

        $this->addSauce();

        if ($this->customerWantsVegetables()) {
            $this->addVeggie();
        }

        if ($this->customerWantsCheese()) {
            $this->addCheese();
        }

        $this->wrapSandwich();
    }

    public function cutBreadLoaf()
    {
        echo "\nCut bread loaf ";
    }

    abstract function addVeggie();

    abstract function addCheese();

    abstract function addSauce();

    public function wrapSandwich()
    {
        echo "\nWrap the Sandwich";
    }

    public function customerWantsCheese(): bool
    {
        return true;
    }

    public function customerWantsVegetables(): bool
    {
        return true;
    }

}

