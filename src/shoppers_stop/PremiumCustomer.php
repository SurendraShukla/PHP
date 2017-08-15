<?php

namespace src\suren\ShoppersStop;


class PremiumCustomer extends Customer {

    private static $discountSlabs = array(
                                    0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>10),
                                    1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>20),
                                    2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>30)
                                );

    public static function getDiscountSlab() {
        echo 'inside PremiumCustomer getDiscountSlab()';
        return PremiumCustomer::$discountSlabs;
    }
} 