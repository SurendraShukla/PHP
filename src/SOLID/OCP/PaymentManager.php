<?php

namespace SOLID\OCP;

class PaymentManager{

    protected $paymentMethod;

    // Need to change it to CreditCard
    public function __construct(PaymentMethodInterface $paymentMethodType) {
        $this->paymentMethod = $paymentMethodType;
    }

    public function process() {

        $this->paymentMethod->processPayment();
        // ... and othe payment stuff

    }
}

