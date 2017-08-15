<?php

namespace src\suren\ShoppersStop;


class BillCalculator {

    private $_totalBillAmount = 0;
    private $regularCustomerSlabs= array(
                                        0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>0),
                                        1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>10),
                                        2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>20)
                                    );
    private $premiumCustomerSlabs= array(
                                        0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>10),
                                        1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>20),
                                        2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>30)
                                    );

    public function calculateBillAmount($purchaseAmount) {

        $customerSlabDetails = $this->getClustomerSlabDetails();

        foreach($customerSlabDetails as $slab => $slabDetails) {

            if($purchaseAmount < $slabDetails['min']) { return $this->_getBillAmount(); }

            $slabAmountForDiscount  = ($slabDetails['max'] <= $purchaseAmount) ? $slabDetails['max'] : $purchaseAmount;
            $slabAmountTaxable      = ($slabAmountForDiscount-$slabDetails['min'])+1;
            $this->_addToBillAmount($this->_getDiscountedBillAmountForSlab($slabAmountTaxable, $slabDetails));
            //echo "\n \$purchaseAmount=[".$purchaseAmount.'] $totalBillAmount=['.$totalBillAmount.'] $slabAmountTaxable=['.$slabAmountTaxable.'] $slab=['.$slab.']';
        }
        return $this->_getBillAmount();
    }

    private function _addToBillAmount($discountedBillAmount) {
        return $this->_totalBillAmount+= $discountedBillAmount;
    }

    private function _getDiscountedBillAmountForSlab($slabAmountTaxable, $slabDetails) {
        return ($slabAmountTaxable - (($slabAmountTaxable / 100) * $slabDetails['discountPercentage']));
    }

    private function _getBillAmount() {
        return $this->_totalBillAmount;
    }

    public function getCustomerSlabDetails() {
        return ('Regular' == $this->customerType) ? $this->regularCustomerSlabs: $this->premiumCustomerSlabs;
    }

} 