<?php

namespace src\SOLID\OCP\Violation;

class PaymentManager{

    private $paymentMethod;

    // Need to change it to CreditCard
    public function __construct(string $paymentType) {
        if('GoogleWallet' == $paymentType) {
            $this->paymentMethod = new GoogleWallet();
        }else{
            $this->paymentMethod = new Paypal();;
        }

    }

    public function process() {
        $this->paymentMethod->processPayment();
    }
}

