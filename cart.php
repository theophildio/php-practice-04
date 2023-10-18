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

}
