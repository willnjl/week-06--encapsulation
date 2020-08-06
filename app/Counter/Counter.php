<?php


namespace App\Counter;


class Counter
{
    private $count;

    public function increment() : Counter
    {
        $this->count += 1;
        return $this;
    }

    public function count()
    {
        return $this->count;
    }
}


