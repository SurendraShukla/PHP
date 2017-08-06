<?php

namespace src\SOLID\OCP;

class Paypal extends PaymentMethodInterface{

    public function processPayment() {
        echo "Payment process through Paypal";
    }

}
