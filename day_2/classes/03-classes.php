<?php

require __DIR__ . "/vendor/autoload.php";

class Car
{
    // need to to take in at least three properties car number plate and mileage(needs to be 0)
    private $make;
    private $numberplate;
    private $mileage = 0;
    
    // need a constructor because there are values that need passing in

    public function __construct($make, $numberplate)
    {
        $this->make = $make;
        $this->numberplate = $numberplate;
    }
    //needs to have function for number plate, make and milage
    public function getNumberplate()
    {
        return $this->numberplate;
        //returns number plate
    }
    public function getMake()
    {
        return $this->make;
        //returns make
    }
    public function getMileage()
    {
        return $this->mileage;
        //returns mileage
    }
    public function addJourney($miles) // represents the number of miles being passed
    {
        $this->mileage += $miles; // adds whatever miles that are being passed
        return $this;
    }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
dump($car->getNumberplate()); // "XY11 4TY"
dump($car->getMake()); // "Ford"
dump($car->getMileage()); // 0

// you can add journey
$car->addJourney(100);
dump($car->getMileage()); // 100

$car->addJourney(200);
dump($car->getMileage()); // 300