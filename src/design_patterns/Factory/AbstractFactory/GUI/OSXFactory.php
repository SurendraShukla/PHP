<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


class OSXFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new OSXButton();
    }
}
