<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


interface GUIFactory
{
    public function createButton(): Button;
}
