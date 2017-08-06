<?php

namespace src\suren\ShoppersStop;


class ShoppersStop {

    private $_customer = '';

    public function __construct($customerType) {
        $this->_customer = CustomerFactory::getCustomer($customerType);
    }

    public function getBillAmount($purchaseAmount) {
        return $this->_customer->getBillAmount($purchaseAmount);;
    }


}

/*
class ShoppersStop {

    private $_customerType = '';
    private $_discountSlabsForRegularCustomer= array(
                                        0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>0),
                                        1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>10),
                                        2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>20)
                                        );
    private $_discountSlabsForPremiumCustomer= array(
                                        0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>10),
                                        1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>20),
                                        2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>30)
                                    );

    public function __construct($customerType) {
        $this->_customerType = $customerType;
    }

    public function getBillAmount($purchaseAmount) {
        $billAmount = 0;
        $customerSlabDetails = $this->getCustomerSlabDetails();

        foreach($customerSlabDetails as $slab => $slabDetails) {

            if($this->isPurchaseAmountSmallerThanMinimumSlabAmount($purchaseAmount, $slabDetails)) {
                return $billAmount;
            }

            $taxableAmount= $this->getTaxableAmountForSlab($purchaseAmount, $slabDetails);
            $billAmount+=   $this->getCalculatedBillAmount($taxableAmount, $slabDetails);
            //echo "\n \$purchaseAmount=[".$purchaseAmount.'] $billAmount=['.$billAmount.'] $taxableAmount=['.$taxableAmount.'] $slab=['.$slab.']';
        }
        return $billAmount;
    }

    public function getCustomerSlabDetails() {
        return ('Regular' == $this->_customerType) ? $this->_discountSlabsForRegularCustomer: $this->_discountSlabsForPremiumCustomer;
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
*/