<?php

namespace design_patterns\Template\Order;


class NetOrder extends OrderProcessTemplate
{
    public function doSelect()
    {
        echo "\nItem added to online shopping cart,";
        echo "\nGet gift wrap preference,";
        echo "\nGet delivery address.";
    }

    public function doPayment()
    {
        echo "\nOnline Payment through Netbanking/Cards.";
    }

    public function doDelivery()
    {
        echo "\nShip the item through post to delivery address";
    }

}
