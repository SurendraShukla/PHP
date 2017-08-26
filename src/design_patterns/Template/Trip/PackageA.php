<?php

namespace design_patterns\Template\Trip;


class PackageA extends Trip
{
    public function doComingTransport()
    {
        echo "\nThe turists are comming by air ...";
    }

    public function doDayA()
    {
        echo "\nThe turists are visiting the aquarium ...";
    }

    public function doDayB()
    {
        echo "\nThe turists are going to the beach ...";
    }

    public function doDayC()
    {
        echo "\nThe turists are going to mountains ...";
    }

    public function doReturningTransport()
    {
        echo "\nThe turists are going home by air ...";
    }


}
