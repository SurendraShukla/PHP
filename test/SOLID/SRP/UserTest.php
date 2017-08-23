<?php

namespace SOLID\SRP;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    /**
     * @test
     */
    public function classHasMoreThanOneResponsibility() {
        $logger = new Logger();
        $userValidator = new UserValidator();
        $user = new User($logger, $userValidator);
        $user->create($user);
        Assert::assertTrue(true);
    }
    
}
