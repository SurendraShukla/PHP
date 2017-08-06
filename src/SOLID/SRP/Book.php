<?php

namespace src\SOLID\SRP;

class Book {

    private $printer;

//    private $simpleFilePersistence;
//    public function __construct(Printer $printer, SimpleFilePersistence $simpleFilePersistence) {
//        $this->printer = $printer;
//        $this->simpleFilePersistence = $simpleFilePersistence;
//    }

    public function __construct(Printer $printer) {
        $this->printer = $printer;
    }

    public function getTitle():string {
        return "Title";
    }

    public function getAuthor():string {
        return "Author";
    }

    public function turnPage() {
        // pointer to next page
    }

    public function printCurrentPage() {
        $this->printer->printPage("Print Current Page Content");
    }
//
//    public function save() {
//        $this->simpleFilePersistence->save($this);
//    }

}

class SimpleFilePersistence {

    public function save(Book $book) {
        $filename = '/tmp/' . $book->getTitle() . '-' . $book->getAuthor().'.txt';
        file_put_contents($filename, serialize($book) );
    }

}

interface Printer {
    public function printPage($page);
}

class PlainTextPrinter implements Printer {

    public function printPage($page) {
        echo $page;
    }

}

class HtmlPrinter implements Printer {

    public function printPage($page) {
        echo '<div style="single-page">' . $page . '</div>';
    }

}

