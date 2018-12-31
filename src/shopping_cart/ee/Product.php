<?php
declare(strict_types=1);

namespace shopping_cart\ee;


class Product
{
    private $_name;
    private $_price;
    private $_minimumPurchaseQuantiy;
    private $_freeQunatity;

    /**
     * Product constructor.
     * @param $_name
     * @param $_price
     */
    public function __construct($_name, $_price, $_minimumPurchaseQuantiy, $_freeQunatity) {
        $this->_name = $_name;
        $this->_price = $_price;
        $this->_minimumPurchaseQuantiy = $_minimumPurchaseQuantiy;
        $this->_freeQunatity = $_freeQunatity;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->_price;
    }

    public function getFreeQunatity($quantity)
    {
        if($quantity >= $this->_minimumPurchaseQuantiy) {
            return $this->_freeQunatity;
        }
    }


}