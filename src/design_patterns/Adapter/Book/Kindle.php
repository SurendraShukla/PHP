<?php

namespace design_patterns\Adapter\Book;

/**
 * Kindle is a concrete electronic book.
 */
class Kindle implements EBookInterface
{
    /**
     * {@inheritdoc}
     */
    public function pressNext()
    {
        echo "Pressed Started";
    }

    /**
     * {@inheritdoc}
     */
    public function pressStart()
    {
        echo "Pressed Started";
    }
}
