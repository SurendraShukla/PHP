<?php

namespace design_patterns\Iterator\BookIterator;


class BookCollection implements \IteratorAggregate
{
    private $a_titles = array();

    public function getIterator()
    {
        return new BookIterator($this);
    }

    public function addTitle($string)
    {
        $this->a_titles[] = $string;
    }

    public function getTitle($key)
    {
        if (isset($this->a_titles[$key])) {
            return $this->a_titles[$key];
        }
        return null;
    }

    public function is_empty()
    {
        return empty($a_titles);
    }
}
