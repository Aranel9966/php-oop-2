<?php

class Food extends Animals
{
    public $type;
    public $price;
    public $taste;
    function __construct(string $breed, string $size, string $type, string $taste, string $price)
    {
        parent::__construct($breed, $size);
        $this->type = $type;
        $this->taste = $taste;
        $this->price = $price;
    }
}
