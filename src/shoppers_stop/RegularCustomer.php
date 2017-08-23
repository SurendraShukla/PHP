<?php

namespace suren\ShoppersStop;


class RegularCustomer extends Customer {

    private static $discountSlabs = array(
                                        0=>array('min'=>1, 'max'=>5000, 'discountPercentage'=>0),
                                        1=>array('min'=>5001, 'max'=>10000, 'discountPercentage'=>10),
                                        2=>array('min'=>10001, 'max'=>99999, 'discountPercentage'=>20)
                                    );

    public static function getDiscountSlab(){
        return RegularCustomer::$discountSlabs;
    }
    
} 