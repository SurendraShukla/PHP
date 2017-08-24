<?php

namespace design_patterns\Adapter\Book;

/**
 * PaperBookInterface is a contract for a book.
 */
interface PaperBookInterface
{
    /**
     * method to open the book.
     *
     * @return mixed
     */
    public function open();


    /**
     * method to turn pages.
     *
     * @return mixed
     */
    public function turnPage();

}
