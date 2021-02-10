<?php

namespace App\Shopping;

class BasketItem
{
    //take a type and price in the constructor
    private $type;
    private $price;

    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }
    //needs to have three functions type, price and priceformatted
    public function type()
    {
        //needs to display the type of drink so can leave parameters empty and just use return $this
        return $this->type;
    }
    public function price()
    {
        //needs to return the price of the coffee so can leave parameters empty and just return $this
        return $this->price;
    }
    public function priceFormatted()
    {
        return "£" . number_format($this->price, 2);
        // need to put two as it rounds up the number to 4, 2 means it can have two decimal places
        //this works by using interpolation, using the full stop to join
    }
}
