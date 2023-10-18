<?php

class Product
{
    // Properties
    private $id;
    private $name;
    private $price;

    // Constructor
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Format the price as a string with two decimal places
    public function getFormattedPrice()
    {
        return '$' . number_format($this->price, 2);
    }

}
