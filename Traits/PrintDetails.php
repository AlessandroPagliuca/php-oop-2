<?php

trait PrintDetails
{
    protected $brand;
    public function getBrand()
    {
        if ($this->brand) {
            return $this->brand;
        } else {
            return 'Brand non impostato';
        }
    }
    public function setBrand($brand)
    {
        if (!is_string($brand)) {
            throw new Exception('Is not a string');
        }
        $this->brand = $brand;
    }
}