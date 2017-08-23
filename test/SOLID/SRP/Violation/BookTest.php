<?php

namespace SOLID\SRP\Violation;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase{

    /**
     * @test
     */
    public function classHasMoreThanOneResponsibility() {
        $book = new Book();
        $book->printCurrentPage();
        $book->save();
        Assert::assertTrue(true);
    }
    
}
