<?php

namespace design_patterns\Iterator\BookIterator;


class BookIterator implements \Iterator
{
    private $i_position = 0;
    private $booksCollection;

    public function __construct(BookCollection $booksCollection)
    {
        $this->booksCollection = $booksCollection;
    }

    public function current()
    {
        return $this->booksCollection->getTitle($this->i_position);
    }

    public function key()
    {
        return $this->i_position;
    }

    public function next()
    {
        $this->i_position++;
    }

    public function rewind()
    {
        $this->i_position = 0;
    }

    public function valid()
    {
        return !is_null($this->booksCollection->getTitle($this->i_position));
    }
}
