<?php

namespace SOLID\OCP;

class Paypal extends PaymentMethodInterface{

    public function processPayment() {
        echo "Payment process through Paypal";
    }

}
