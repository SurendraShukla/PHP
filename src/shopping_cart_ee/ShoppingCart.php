<?php
declare(strict_types=1);

namespace shopping_cart_ee;


class ShoppingCart {

    private $_totalPrice = 0;
    private $_totalDiscount = 0;

    public function __construct() {
    }

    public function totalPrice(): int {
        return $this->_totalPrice;
    }

    public function addProduct(Product $product, $quantity) {
        $this->_totalPrice+= $product->getPrice() * ($quantity-$product->getFreeQunatity($quantity));
        $this->_totalDiscount+= $product->getPrice() * $product->getFreeQunatity($quantity);
    }

    public function getTotalDiscount()
    {
        return $this->_totalDiscount;
    }
}

