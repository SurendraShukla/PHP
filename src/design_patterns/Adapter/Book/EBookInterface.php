<?php

namespace design_patterns\Adapter\Book;

/**
 * EBookInterface is a contract for an electronic book.
 */
interface EBookInterface
{
    /**
     * go to next page.
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * start the book.
     *
     * @return mixed
     */
    public function pressStart();
}
