<?php
require_once('./Traits/expirationable.php');

class Food extends Animals
{
    use Expirationable;
    public $type;
    public $taste;
    function __construct(string $price, string $img, string $breed, string $size, string $type, string $taste,)
    {
        parent::__construct($price, $img, $breed, $size);
        $this->type = $type;
        $this->taste = $taste;
    }
}
