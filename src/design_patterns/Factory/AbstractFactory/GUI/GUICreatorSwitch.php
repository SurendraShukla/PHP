<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


class GUICreatorSwitch
{
    private $instance;

    public function __construct(string $appearance)
    {
        switch ($appearance) {
            case "OSX":
                $this->instance = new OSXFactory();
                break;
            default:
                $this->instance = new WinFactory();
                break;
        }
    }

    public function createUI()
    {
        $button = $this->instance->createButton();
        $button->paint();
    }

}