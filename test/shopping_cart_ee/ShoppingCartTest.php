<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 6/3/17
 * Time: 10:33 AM
 */

namespace test;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use src\shopping_cart_ee\Product;
use src\shopping_cart_ee\ShoppingCart;

class ShoppingCartTest extends TestCase
{
    /**
     * @test
     */
    public function priceShouldBeZeroIfShoppingCartIsEmpty() {
        $shoppingCart = new ShoppingCart();
        Assert::assertSame(0, $shoppingCart->totalPrice());
    }

    /**
     * @test
     */
    public function totalPriceShouldBeThirtyIfOneDoveSoapIsAdded() {
        $shoppingCart = new ShoppingCart();
        $product = new Product('Dove Soap', 30, 0, 0);
        $shoppingCart->addProduct($product, 1);
        Assert::assertSame(30, $shoppingCart->totalPrice());
    }

    /**
     * @test
     */
    public function totalPriceShouldBeTheTotalPriceOfItemPriceIfItsAddedOnce(){
        $shoppingCart = new ShoppingCart();
        $product = new Product('Dove Soap', 40, 0, 0);
        $shoppingCart->addProduct($product, 1);
        Assert::assertSame(40, $shoppingCart->totalPrice());
    }

    /**
     * @test
     */
    public function totalPriceShouldBeDoubleThePriceOfItemPriceIfTwoQuantitiesOfItemIsAdded() {
        $shoppingCart = new ShoppingCart();
        $product = new Product('Dove Soap', 40, 0, 0);
        $shoppingCart->addProduct($product, 2);
        Assert::assertSame(80, $shoppingCart->totalPrice());
    }

    /**
     * @test
     */
    public function shouldReturnTotalPriceForProductsAddedInBasket(){
        $shoppingCart = new ShoppingCart();
        $doveSoap = new Product('Dove Soap', 40, 0, 0);
        $shoppingCart->addProduct($doveSoap, 2);

        $lifebuySoap = new Product('Lifebuy Soap', 30, 0, 0);
        $shoppingCart->addProduct($lifebuySoap, 1);
        Assert::assertSame(110, $shoppingCart->totalPrice());
    }

    /**
     * @test
     */
    public function threeDoveProductPriceShouldOfTwoDoveProductIfBuyTwoAndGetOneFreeOfferIsThere() {
        $shoppingCart = new ShoppingCart();
        $doveSoap = new Product('Dove Soap', 30, 2, 1);
        $shoppingCart->addProduct($doveSoap, 3);

        Assert::assertSame(60, $shoppingCart->totalPrice());
        Assert::assertSame(30, $shoppingCart->getTotalDiscount());
    }

    /**
     * @test
     */
    public function fiveDoverProductShouldBePurchasedInFourDovePrice(){
        $shoppingCart = new ShoppingCart();
        $doveSoap = new Product('Dove Soap', 30, 2, 1);
        $shoppingCart->addProduct($doveSoap, 5);

        Assert::assertSame(120, $shoppingCart->totalPrice());
        Assert::assertSame(30, $shoppingCart->getTotalDiscount());
    }

//    /**
//     * @test
//     */
//    public function sixDoveShouldBePurchasedInPriceOfFourDove(){
//        $shoppingCart = new ShoppingCart();
//        $doveSoap = new Product('Dove Soap', 30, 2, 1);
//        $shoppingCart->addProduct($doveSoap, 6);
//
//        Assert::assertSame(120, $shoppingCart->totalPrice());
//        Assert::assertSame(60, $shoppingCart->getTotalDiscount());
//    }
}