<?php

class Articles extends Animals
{
    public $type;
    public $color;
    function __construct(string $price, string $img, string $breed, string $size, string $type, string $color)
    {
        parent::__construct($price, $img, $breed, $size);
        $this->type = $type;
        $this->color = $color;
    }
}
