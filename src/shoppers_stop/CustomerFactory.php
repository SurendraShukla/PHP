<?php

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