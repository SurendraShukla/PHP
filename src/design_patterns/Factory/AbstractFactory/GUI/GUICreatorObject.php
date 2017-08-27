<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


class GUICreatorObject
{
    private $instance;

    public function __construct(GUIFactory $instance)
    {
        $this->instance = $instance;
    }

    public function createUI()
    {
        $button = $this->instance->createButton();
        $button->paint();
    }

}