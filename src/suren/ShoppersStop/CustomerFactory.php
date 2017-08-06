<?php
/**
 * Created by PhpStorm.
 * User: shuklas
 * Date: 9/3/15
 * Time: 8:45 PM
 */

namespace src\suren\ShoppersStop;


class CustomerFactory {

    public static function getCustomer($customerType) {

        switch(strtoupper($customerType)) {
            case "REGULAR":
                $customer = new RegularCustomer();
                break;
            case "PREMIUM":
                $customer = new PremiumCustomer();
                break;
        }

        return $customer;
    }

} 