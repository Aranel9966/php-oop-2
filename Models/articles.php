<?php

class Articles extends Animals
{
    public $type;
    public $price;
    public $color;
    function __construct(string $breed, string $size, string $type, string $color, string $price)
    {
        parent::__construct($breed, $size);
        $this->type = $type;
        $this->color = $color;
        $this->price = $price;
    }
}
