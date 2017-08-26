<?php

namespace design_patterns\Template\Order;


abstract class OrderProcessTemplate
{
    public $isGift;

    public abstract function doSelect();

    public abstract function doPayment();

    public final function giftWrap()
    {
        echo "\nGift wrap done.";
    }

    public abstract function doDelivery();

    public final function processOrder()
    {
        $this->doSelect();
        $this->doPayment();
        if ($this->isGift) {
            $this->giftWrap();
        }
        $this->doDelivery();
    }

}
