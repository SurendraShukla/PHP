<?php

namespace design_patterns\Factory\FactoryMethod\Car;


class Sedan implements Car
{
    public function getType()
    {
        return 'Sedan';
    }

}