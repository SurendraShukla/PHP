<?php

namespace design_patterns\Adapter\Book;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{

    /**
     * @test
     */
    public function book()
    {
//        $kindle = new EBookAdapter(new Kindle());
//        $kindle->open();
//
        $bookObj = new Book();
        $bookObj->open();

        Assert::assertTrue(true);

    }

}
