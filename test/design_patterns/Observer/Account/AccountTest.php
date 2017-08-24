<?php

namespace design_patterns\Observer\Account;


use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    public function test()
    {
        $account = new Account();
        $account->status = "Expired";
        $account->save();
        print_r($account->getUpdate()->status);
        Assert::assertTrue(true);
    }
}