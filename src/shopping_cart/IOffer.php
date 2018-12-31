<?php

namespace shopping_cart;


interface IOffer {
    public function applyOffer(Product $product);
}
