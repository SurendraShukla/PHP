<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


class OSXButton implements Button
{
    public function paint()
    {
        echo "OSX Button";
    }
}
