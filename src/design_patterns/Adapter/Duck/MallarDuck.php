<?php

namespace design_patterns\Adapter\Duck;


class MallarDuck implements Duck
{
    public function quack()
    {
        echo "Quack";
    }

    public function fly()
    {
        echo "I am flying";
    }

}