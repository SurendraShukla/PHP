<?php

use PHPUnit\Framework\TestCase;
use coding_dojo\ProductPurchase;


class ProductPuchaseTest extends TestCase {
    
    private $productPurchase;
    
    public function setup() {
        $this->productPurchase = new ProductPurchase();
    }

//    public function testProductPurchaseByDealerIsInValidForProductPurchasing() {
////        $this->assertFalse($this->productPurchase->isValidPurchase($productPruchaseList));
//    }

    public function testProductPurchaseByDealerIsInValidForInValidProductPurchasing() {
        $productPruchaseList = array('Maintenance' => 0,
                                    'Parts' => 0,
                                    'Body' => 0,
                                    'ShopTires'=> 2000
                                );
        $this->assertFalse($this->productPurchase->isValidPurchase($productPruchaseList));

        $productPruchaseList = array(
            'Maintenance' => 0,
            'Parts' => 1500,
            'Body' => 0,
            'ShopTires'=> 0
        );
        $this->assertFalse($this->productPurchase->isValidPurchase($productPruchaseList));
    }

    public function testValidProductPurchasingIfDealerHasPurchasedOnlyMaintenance() {
        $productPruchaseList = array(
            'Maintenance' => 2000
        );
        $this->assertTrue($this->productPurchase->isValidPurchase($productPruchaseList));

        $productPruchaseList = array(
            'Maintenance' => 2000,
            'Parts' => 0,
            'Body' => 0,
            'ShopTires'=> 0
        );
        $this->assertTrue($this->productPurchase->isValidPurchase($productPruchaseList));
    }

    public function testValidProductPurchasingIfDealerPurchasedMaintenaceAndBody() {
        $productPruchaseList = array(
            'Maintenance' => 1000,
            'Parts' => 0,
            'Body' => 1000,
            'ShopTires'=> 0
        );
        $this->assertTrue($this->productPurchase->isValidPurchase($productPruchaseList));
    }

    public function testValidProductPurchasingIfDealerPurchasedAllProducts() {
        $productPruchaseList = array(
            'Maintenance' => 2000,
            'Parts' => 1000,
            'Body' => 1500,
            'ShopTires'=> 1000
        );
        $this->assertTrue($this->productPurchase->isValidPurchase($productPruchaseList));
    }

    public function testValidProductPurchasingIfDealerPurchasedMaintenaceAndShop() {
        $productPruchaseList = array(
            'Maintenance' => 2000,
            'Parts' => 0,
            'Body' => 0,
            'ShopTires'=> 1000
        );
        $this->assertTrue($this->productPurchase->isValidPurchase($productPruchaseList));
    }
//
//    public function testInvalidPurchasingIfProductPurchasingHasIncorrectIncrementValue() {
//        $productPruchaseList = array(
//            'Maintenance' => 1000,
//            'Parts' => 1100,
//            'Body' => 0,
//            'ShopTires'=> 0
//        );
////        $this->assertFalse($this->productPurchase->isValidPurchase($productPruchaseList));
//    }
}