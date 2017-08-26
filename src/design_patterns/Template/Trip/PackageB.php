<?php

namespace design_patterns\Template\Trip;


class PackageB extends Trip
{

    public function doComingTransport()
    {
        echo "\nThe turists are comming by train ...";
    }

    public function doDayA()
    {
        echo "\nThe turists are visiting the mountain ...";
    }

    public function doDayB()
    {
        echo "\nThe turists are going to the beach ...";
    }

    public function doDayC()
    {
        echo "\nThe turists are going to zoo ...";
    }

    public function doReturningTransport()
    {
        echo "\nThe turists are going home by train ...";
    }

}
