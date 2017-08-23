<?php

namespace design_patterns\Builder;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class TeaBuilderDemo extends TestCase
{
    /**
     * @test
     */
    public static function getTea()
    {
        $teaMaker = new TeaMaker();
        $teaMaker->setTeaBuilder(new BlackTeaBuilder());
        $teaMaker->prepareTea();
        $tea = $teaMaker->getTea();
        echo "Tea is prepared with " . $tea->getMilkQuantity() . '% milk, '
            . $tea->getWaterQuantity() . "% water" . $tea->getSugarSpoons()
            . ' spoon[s] sugar';
        Assert::assertTrue(true);
    }
}

TeaBuilderDemo::getTea();