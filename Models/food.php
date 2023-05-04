<?php

class Food extends Animals
{
    public $type;
    public $price;
    public $taste;
    function __construct(string $img, string $breed, string $size, string $type, string $taste, string $price)
    {
        parent::__construct($img, $breed, $size);
        $this->type = $type;
        $this->taste = $taste;
        $this->price = $price;
    }
}
