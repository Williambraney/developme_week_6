<?php

require __DIR__ . "/vendor/autoload.php";

class Address
{
    // needs different properties for different parts of the address
    private $street;
    private $postcode;
    private $town;

    //public constructor because there are values to pass in
    public function __construct($street, $postcode, $town)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }
    //need to create 4 methods, full address, street, postcode and town
    public function fullAddress()
    {
        return "$this->street, $this->town, $this->postcode";
    }
    public function setStreet($streetupdate)
    {
        $this->street = $streetupdate; //updates the values of the address by submitting the new updates as the new details
    }
    public function setPostcode($postcodeupdate)
    {
        $this->postcode = $postcodeupdate;
    }
    public function setTown($townupdate)
    {
        $this->town = $townupdate;
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"
