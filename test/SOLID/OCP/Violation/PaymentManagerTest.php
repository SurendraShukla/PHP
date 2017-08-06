<?php

namespace src\SOLID\OCP\Violation;

use PHPUnit\Framework\TestCase;

class PaymentManagerTest extends TestCase {

    /**
     * @test
     */
    public function classIsOpenForModification(){

        $paymentManager = new PaymentManager('Paypal');
        $paymentManager = new PaymentManager('GoogleWallet');
         $paymentManager = new PaymentManager('CreditCard');
        $paymentManager->process();

    }

}