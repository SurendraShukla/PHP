<?php

namespace design_patterns\Adapter\Duck;


class TurkeyObjectAdapter implements Duck
{
    private $turkey;

    /**
     * TurkeyObjectAdapter constructor.
     */
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        echo "\n**Adapted Behviour";
        $this->turkey->gobble();
    }


    public function fly()
    {
        echo "\n**Adapted Behviour";
        $this->turkey->fly();
    }

}