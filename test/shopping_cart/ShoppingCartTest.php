<?php

namespace shopping_cart;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class ShoppingCart_Test extends TestCase
{

    /**
     * @test
     */
    public function createEmptyShoppingCart()
    {
        $cart = new ShoppingCart();
        Assert::assertEquals(0, $cart->getProductCount());
    }

    /**
     * @test
     */
    public function addSingleProductToShoppingCart()
    {
        $cart = new ShoppingCart();
        $product = new Product("Gatsby hair cream", 1, 30.0);
        $cart->addProduct($product);
        Assert::assertEquals(1, $cart->getProductCount());
        Assert::assertEquals(30.0, $cart->getTotalCartValue());
    }

    /**
     * @test
     */
    public function addDifferentProductsToTheCart()
    {
        $cart = new ShoppingCart();
        $gatsByCream = new Product("Gatsby hair cream", 1, 30.0);
        $bvlgiriSoap = new Product("Bvlgiri Soap", 1, 100.0);
        $cart->addProduct($gatsByCream);
        $cart->addProduct($bvlgiriSoap);
        Assert::assertEquals(2, $cart->getProductCount());
        Assert::assertEquals(130.0, $cart->getTotalCartValue(), 0.0);
    }

    /**
     * @test
     */
    public function addMultipleQuantityOfAProductAndApplyOfferToCart()
    {
        $offer = new BuyXItemGetYItemFreeOffer(2, 1);
        $cart = new ShoppingCart();
        $cart->setOffer($offer);
        $product = new Product("Gatsby hair cream", 5, 150.0);
        $cart->addProduct($product);
        Assert::assertEquals(1, $cart->getProductCount());
        Assert::assertEquals(120.0, $cart->getTotalCartValue(), 0.0);
    }

    /**
     * @test
     */
    public function addDifferentProductsAndAppyOfferToTheCart()
    {
        $offer = new BuyXItemGetYItemFreeOffer(2, 1);
        $cart = new ShoppingCart();
        $gatsByCream = new Product("Gatsby hair cream", 3, 90.0);
        $bvlgiriSoap = new Product("Bvlgiri Soap", 2, 200.0);
        $cart->setOffer($offer);
        $cart->addProduct($gatsByCream);
        $cart->setOffer(new NoOffer());//No offer for the Soap
        $cart->addProduct($bvlgiriSoap);
        Assert::assertEquals(2, $cart->getProductCount());
        Assert::assertEquals(260.0, $cart->getTotalCartValue(), 0.0);
    }

    /**
     * @test
     */
    public function testApplyBuyOneGetFiftyPercentDiscountOnNextOfferToTheCart()
    {
        $offer = new DiscountOnNextItemOffer(50.0);
        $cart = new ShoppingCart();
        $cart->setOffer($offer);
        $gatsByCream = new Product("Gatsby hair cream", 2, 60.0);
        $cart->addProduct($gatsByCream);
        Assert::assertEquals(1, $cart->getProductCount());
        Assert::assertEquals(45.0, $cart->getProductByName("Gatsby hair cream")->getTotalPrice(), 0.0);
        Assert::assertEquals(45.0, $cart->getTotalCartValue(), 0.0);
    }

    /**
     * @test
     */
    public function testApplyBuyOneGetFiftyPercentDiscountOnNextOfferToTheMultipleProductsInCart()
    {
        $offer = new DiscountOnNextItemOffer(50.0);
        $cart = new ShoppingCart();
        $cart->setOffer($offer);
        $gatsByCream = new Product("Gatsby hair cream", 5, 150.0);
        $cart->addProduct($gatsByCream);
        Assert::assertEquals(1, $cart->getProductCount());
        Assert::assertEquals(120.0, $cart->getProductByName("Gatsby hair cream")->getTotalPrice(), 0.0);
        Assert::assertEquals(120.0, $cart->getTotalCartValue(), 0.0);
    }

}

// http://www.basicsbehind.com/tdd-by-example-2/