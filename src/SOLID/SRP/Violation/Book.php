<?php

namespace src\SOLID\SRP\Violation;

// 3 Different actors.
// 1. Book Management (Librarian)
// 2. Data Presentation Mechanism (Content delivered to the user - On-screen, Graphical UI, Text-only UI, Printing)
// 3. Data storage (Persistence - DB/File)
class Book {

    public function getTitle():string {
        return "Title";
    }

    public function getAuthor():string {
        return "Author";
    }

    public function turnPage():string {
        // pointer to next page
    }

    public function printCurrentPage() {
        echo "Current page content";
    }

    public function save() {
        $filename = '/tmp/'. $this->getTitle(). '-' . $this->getAuthor().'.txt';
        file_put_contents($filename, serialize($this));
    }

}

