<?php

namespace SOLID\OCP;

class GoogleWallet extends PaymentMethodInterface{

    public function processPayment() {
        echo "Payment process through GoogleWallet";
    }

}
