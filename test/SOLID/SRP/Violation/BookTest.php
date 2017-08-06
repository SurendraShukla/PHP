<?php

namespace src\SOLID\SRP\Violation;

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase{

    /**
     * @test
     */
    public function classHasMoreThanOneResponsibility() {
        $book = new Book();
        $book->printCurrentPage();
        $book->save();
    }
    
}
