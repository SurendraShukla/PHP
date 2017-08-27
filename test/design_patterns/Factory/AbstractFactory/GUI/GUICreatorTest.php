<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class GUICreatorTest extends TestCase
{
    public function testObject()
    {
        $osXFactory = new OSXFactory();
        $guiObjectInstance = new GUICreatorObject($osXFactory);
        $guiObjectInstance->createUI();

        Assert::assertTrue(true);
    }

    public function testSwitch()
    {
//        $guiSwitchInstance = new GUICreatorSwitch('OSX');
        $guiSwitchInstance = new GUICreatorSwitch('');
        $guiSwitchInstance->createUI();

        Assert::assertTrue(true);
    }
}