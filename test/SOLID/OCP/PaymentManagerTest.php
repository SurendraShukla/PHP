<?php

namespace SOLID\OCP;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class PaymentManagerTest extends TestCase {

    /**
     * @test
     */
    public function classIsOpenForModification(){

        $paymentMethod = new Paypal();
        // $paymentMethod = new GoogleWallet();
        // $paymentMethod = new CreditCard();

        $paymentManager = new PaymentManager($paymentMethod);
        $paymentManager->process();

        Assert::assertTrue(true);

    }

}