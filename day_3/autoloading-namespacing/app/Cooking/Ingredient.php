<?php

namespace App\Cooking;

// needs a constructor because it has values to pass through
//needs a name and a vegan method
class Ingredient
{
private $name;
private $vegan;

public function __construct($name, $vegan)
{
    $this-> name = $name;
    $this-> vegan = collect($vegan);
    // when using an array you need to use the collection function to create a new collection
}
//needs a method for name and vegan at least
public function name()
{
// just needs to return the name
    return $this->name;
}
public function vegan()
{
    return
        $this->vegan->contains("gluten");
        //contains looks for a substring 
}

}