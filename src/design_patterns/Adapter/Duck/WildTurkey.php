<?php

namespace design_patterns\Adapter\Duck;


class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo "Gobble Gobble";
    }

    public function fly()
    {
        echo "I am flying a short distance";
    }


}