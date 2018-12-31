<?php

namespace shopping_cart;


class Product
{
    private $name;
    private $quantity;
    private $totalPrice;

    /**
     * Product constructor.
     */
    public function __construct($name, $quantity, $totalPrice) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }


}
