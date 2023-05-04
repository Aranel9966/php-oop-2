<?php

class Animals
{
    public $breed;
    public $size;
    function __construct(string $breed, string $size)
    {
        $this->breed = $breed;
        $this->size = $size;
    }
}
