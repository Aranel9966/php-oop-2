<?php

class Animals
{
    public $price;
    public $img;
    public $breed;
    public $size;
    function __construct(string $price, string $img, string $breed, string $size)
    {

        $this->price = $price;
        $this->img = $img;
        $this->breed = $breed;
        $this->size = $size;
    }
}
