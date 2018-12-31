<?php

namespace shopping_cart;


class BuyXItemGetYItemFreeOffer implements IOffer
{

    /**
     * @var int
     */
    /**
     * @var int
     */
    private $xItem, $yItem;


    /**
     * BuyXItemGetYItemFreeOffer constructor.
     * @param int $xItem
     * @param int $yItem
     */
    public function __construct(int $xItem, int $yItem)
    {
        $this->xItem = $xItem;
        $this->yItem = $yItem;
    }

    /**
     * @param Product $product
     */
    public function applyOffer(Product $product)
    {
        if ($product->getQuantity() >= $this->xItem) {

            $freeProductQty = floor($product->getQuantity() / ($this->xItem + $this->yItem));
            $unitPrice = $product->getTotalPrice() / $product->getQuantity();
            $discount = $unitPrice * $freeProductQty;

//            echo "\n\n freeProductQty=[".$freeProductQty.'] $unitPrice=['.$unitPrice.'] $discount=['.$discount.']';
            $product->setTotalPrice($product->getTotalPrice() - $discount);

        }
    }

}