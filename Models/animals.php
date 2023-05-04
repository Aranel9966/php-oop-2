<?php

class Animals
{
    public $img;
    public $breed;
    public $size;
    function __construct(string $img, string $breed, string $size)
    {
        $this->img = $img;
        $this->breed = $breed;
        $this->size = $size;
    }
}
