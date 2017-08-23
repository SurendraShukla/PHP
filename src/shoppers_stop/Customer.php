<?php

namespace suren\ShoppersStop;


abstract class Customer {

    protected static $_discountSlabs = array(
                                    0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>0),
                                    1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>10),
                                    2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>20)
                                    );

    //private static $discountSlabs = '';

    public function getBillAmount($purchaseAmount) {
        $billAmount = 0;
        $customerSlabDetails = $this->getDiscountSlab();

        foreach($customerSlabDetails as $slab => $slabDetails) {
            if($this->isPurchaseAmountSmallerThanMinimumSlabAmount($purchaseAmount, $slabDetails)) { return $billAmount; }

            $taxableAmount= $this->getTaxableAmountForSlab($purchaseAmount, $slabDetails);
            $billAmount+=   $this->getCalculatedBillAmount($taxableAmount, $slabDetails);
        }
        return $billAmount;
    }


    public static function getDiscountSlab() {
        return Customer::$discountSlabs;
    }

    private function isPurchaseAmountSmallerThanMinimumSlabAmount($purchaseAmount, $slabDetails) {
        return $purchaseAmount < $slabDetails['min'];
    }

    private function isPurchaseAmountEqualOrLessThanMaximumSlabAmount($purchaseAmount, $slabDetails) {
        return ($slabDetails['max'] <= $purchaseAmount);
    }

    private function getMinimumTaxableAmountForSlab($purchaseAmount, $slabDetails) {
        return $this->isPurchaseAmountEqualOrLessThanMaximumSlabAmount($purchaseAmount, $slabDetails) ? $slabDetails['max'] : $purchaseAmount;
    }

    private function getCalculatedBillAmount($taxableAmount, $slabDetails) {
        return ($taxableAmount - (($taxableAmount / 100) * $slabDetails['discountPercentage']));
    }

    private function getTaxableAmountForSlab($purchaseAmount, $slabDetails) {
        return ($this->getMinimumTaxableAmountForSlab($purchaseAmount, $slabDetails) - $slabDetails['min']) + 1;
    }


} 