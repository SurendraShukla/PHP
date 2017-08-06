<?php

namespace src\SOLID\SRP\Violation;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{

    /**
     * @test
     */
    public function classHasMoreThanOneResponsibility() {
        $user = new User();
        $user->create('surendra');
    }
    
}
