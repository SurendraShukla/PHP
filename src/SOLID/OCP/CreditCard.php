<?php

namespace src\SOLID\OCP;

class CreditCard extends PaymentMethodInterface{

    public function processPayment() {
        echo "Payment process through CreditCard";
    }

}
