<?php

namespace shopping_cart;


class ShoppingCart {

    private $productList = [];
    private $offer;

    /**
     * ShoppingCart_New constructor.
     */
    public function __construct() {
    }

    public function getProductCount(): int {
        return count($this->productList);
    }

    public function addProduct(Product $product) {
        if($this->offer != null) {
            $this->offer->applyOffer($product);//apply offer
        }
        array_push($this->productList, $product);
    }

    public function getTotalCartValue()
    {
        $total = 0;
        foreach ($this->productList as $product) {
            $total+= $product->getTotalPrice();
        }
        return $total;
    }

    public function setOffer(IOffer $offer)
    {
        $this->offer = $offer;
    }

    public function getProductByName(string $name)
    {
        if (count($this->productList) <= 0) {
            return null;
        }

        foreach ($this->productList as $product) {

            if ($product->getName() == $name) {
                return $product;
            }
        }
    }
}