<?php

namespace design_patterns\Iterator;


use ArrayObject;
use design_patterns\Iterator\BookIterator\BookCollection;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{


    public function test()
    {
        $arr = [1, 2, 3, 4, 5];
        IteratorTest::iterateOverAnyData($arr);

        $obj = (object) array('a'=> 1, 'b'=> 22, 'c'=> 333);
        IteratorTest::iterateOverAnyData($obj);


        $bookList = new BookList();
        $bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));
        IteratorTest::iterateOverAnyData($bookList);


        $booksCollection = new BookCollection();
        $booksCollection->addTitle('Design Patterns');
        $booksCollection->addTitle('PHP7 is the best');
        $booksCollection->addTitle('Laravel Rules');
        $booksCollection->addTitle('DHH Rules');
        IteratorTest::iterateOverAnyData($booksCollection);

        Assert::assertTrue(true);

    }

    public static function iterateOverAnyData($object)
    {

        if( is_array($object) || ('stdClass' === get_class($object)) ) {
            $object = new ArrayObject($object);
        }

//        echo "\n\n";
//
//        for($iterator = $object->getIterator();
//            $iterator->valid();
//            $iterator->next()) {
//
//            echo $iterator->key() . ' => ' . $iterator->current() . "\n";
//        }

        echo "\n\n";

        foreach ($object as $key=>$value) {
            echo "$key => $value \n";
        }

    }
/*
    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new Book('Professional Php Design Patterns', 'Aaron Saray'));
        $bookList->addBook(new Book('Clean Code', 'Robert C. Martin'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book;
        }

        $this->assertEquals(
            [
                'Learning PHP Design Patterns by William Sanders',
                'Professional Php Design Patterns by Aaron Saray',
                'Clean Code by Robert C. Martin',
            ],
            $books
        );
    }

    public function testCanIterateOverBookListAfterRemovingBook()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');
        $book2 = new Book('Professional Php Design Patterns', 'Aaron Saray');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];
        foreach ($bookList as $book) {
            $books[] = $book;
        }

        $this->assertEquals(
            ['Professional Php Design Patterns by Aaron Saray'],
            $books
        );
    }

    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }*/

}
