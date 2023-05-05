<?php

trait Expirationable
{
    public $date;

    public function setExpiration(string $date)
    {

        if ($date != '') {
            return $this->date = $date;
        } else {
            throw new Exception("manca la scadenza");
        }
    }

    public function getExpiration()
    {
        return $this->date;
    }
}
