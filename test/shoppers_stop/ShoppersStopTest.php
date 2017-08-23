<?php

use PHPUnit\Framework\TestCase;
use suren\ShoppersStop\ShoppersStop;

class ShoppersStopTest extends TestCase {

    /**
     * @test
     */
    public function billAmountIs0ForNoPurchasingByRegularCustomer() {
        $this->assertEquals(0, $this->getCustomer('Regular')->getBillAmount(-1));
    }

    /**
     * @test
     */
    public function billAmountIs4999For4999PurchasingByRegularCustomer() {
        $this->assertEquals(4999, $this->getCustomer('Regular')->getBillAmount(4999));
    }

    /**
     * @test
     */
    public function billAmountIs5000For5000PurchasingByRegularCustomer() {
        $this->assertEquals(5000, $this->getCustomer('Regular')->getBillAmount(5000));
    }

    /**
     * @test
     */
    public function billAmountIs5k90PaiseFor5001PurchasingByRegularCustomer() {
        $this->assertEquals(5000.90, $this->getCustomer('Regular')->getBillAmount(5001));
    }

    /**
     * @test
     */
    public function billAmountIs5009For5010PurchasingByRegularCustomer() {
        $this->assertEquals(5009, $this->getCustomer('Regular')->getBillAmount(5010));
    }

    /**
     * @test
     */
    public function billAmountIs5090For5100PurchasingByRegularCustomer() {
        $this->assertEquals(5090, $this->getCustomer('Regular')->getBillAmount(5100));
    }

    /**
     * @test
     */
    public function billAmountIs9500For10000PurchasingByRegularCustomer() {
        $this->assertEquals(9500, $this->getCustomer('Regular')->getBillAmount(10000));
    }

    /**
     * @test
     */
    public function billAmountIs13500For15000PurchasingByRegularCustomer() {
        $this->assertEquals(13500, $this->getCustomer('Regular')->getBillAmount(15000));
    }

    /**
     * @test
     */
    public function billAmountIs4500For5000PurchasingByPremiumCustomer() {
        $this->assertEquals(4500, $this->getCustomer('Premium')->getBillAmount(5000));
    }

    /**
     * @test
     */
    public function billAmountIs8500For10000PurchasingByPremiumCustomer() {
        $this->assertEquals(8500, $this->getCustomer('Premium')->getBillAmount(10000));
    }

    /**
     * @test
     */
    public function billAmountIs12000For15000PurchasingByPremiumCustomer() {
        $this->assertEquals(12000, $this->getCustomer('Premium')->getBillAmount(15000));
    }
//
    /**
     * @return ShoppersStop
     */
    public function getCustomer($customerType) {
        return new ShoppersStop($customerType);;
    }


} 