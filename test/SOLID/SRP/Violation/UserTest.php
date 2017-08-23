<?php

namespace SOLID\SRP\Violation;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    /**
     * @test
     */
    public function classHasMoreThanOneResponsibility() {
        $user = new User();
        $user->create('surendra');

        Assert::assertTrue(true);
    }
    
}
