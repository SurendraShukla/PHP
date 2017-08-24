<?php

namespace design_patterns\Adapter\Book;

use design_patterns\Adapter\Book\PaperBookInterface;

/**
 * Book is a concrete and standard paper book.
 */
class Book implements PaperBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function open()
    {
        echo "Book opened.";
    }

    /**
     * {@inheritdoc}
     */
    public function turnPage()
    {
        echo "Page is turned.";
    }
}
