<?php

namespace SOLID\SRP;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase{

    /**
     * @test
     */
    public function classHasMoreThanOneResponsibility() {

        // Client Code
        //$plainTextPrinter = new PlainTextPrinter();
        // $book = new BookIterator($plainTextPrinter);

        $htmlPrinter = new HtmlPrinter();
        $book = new Book($htmlPrinter);
        $book->printCurrentPage();

        $simpleFilePersistence = new SimpleFilePersistence();
        $simpleFilePersistence->save($book);

        //
        //$book = new BookIterator($htmlPrinter, $simpleFilePersistence);
        //$book->printCurrentPage();
        //$book->save();
        Assert::assertTrue(true);
    }
    
}
