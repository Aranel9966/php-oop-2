<?php

class Food extends Animals
{
    public $type;
    public $taste;
    function __construct(string $price, string $img, string $breed, string $size, string $type, string $taste)
    {
        parent::__construct($price, $img, $breed, $size);
        $this->type = $type;
        $this->taste = $taste;
    }
}
