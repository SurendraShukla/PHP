<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


class WinFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WinButton();
    }
}
