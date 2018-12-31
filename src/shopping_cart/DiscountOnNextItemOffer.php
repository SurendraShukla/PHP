<?php

namespace shopping_cart;


class DiscountOnNextItemOffer implements IOffer
{
    private $discountPercentage;

    public function __construct(float $discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;
    }

    public function applyOffer(Product $product)
    {
        $totalQuantity = $product->getQuantity();
		$unitPrice = $product->getTotalPrice() / $product->getQuantity();
//		echo "\unitpirce=[".$unitPrice.'] discountPercentage=['.$this->discountPercentage.']';
		while ($totalQuantity > 1) {
            $price = $product->getTotalPrice();
			$product->setTotalPrice($price - ($unitPrice / (100/$this->discountPercentage)));
//			echo "\n\nprice=[".$price.'] ['.$product->getTotalPrice().']';
			$totalQuantity = $totalQuantity - 2;
		}
    }

}