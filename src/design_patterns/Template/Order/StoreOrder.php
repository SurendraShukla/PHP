<?php

namespace design_patterns\Template\Order;


class StoreOrder extends OrderProcessTemplate
{
    public function doSelect()
    {
        echo "\nCustomer chooses the item from shelf.";
    }

    public function doPayment()
    {
        echo "\nPays at counter through cash/POS";
    }

    public function doDelivery()
    {
        echo "\nItem deliverd to in delivery counter.";
    }

}
