<?php

namespace design_patterns\Factory\AbstractFactory\GUI;


class WinButton implements Button
{
    public function paint()
    {
        echo "Windows Button";
    }
}
