<?php

namespace design_patterns\Template\Trip;


abstract class Trip
{

    public final function performTrip()
    {
        $this->doComingTransport();
        $this->doDayA();
        $this->doDayB();
        $this->doDayC();
        $this->doReturningTransport();
    }

    public abstract function doComingTransport();

    public abstract function doDayA();

    public abstract function doDayB();

    public abstract function doDayC();

    public abstract function doReturningTransport();

}
