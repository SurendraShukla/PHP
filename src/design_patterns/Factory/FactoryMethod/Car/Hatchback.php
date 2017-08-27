<?php

namespace design_patterns\Factory\FactoryMethod\Car;


class Hatchback implements Car
{
    public function getType()
    {
        return 'Hatchback';
    }

}
