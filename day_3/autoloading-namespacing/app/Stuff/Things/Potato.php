<?php

namespace App\Stuff\Things;

class Potato
{
    private $watering = 0;

    public function water()
    {
        $this->watering += 1;
    }

    public function hasgrown()
    {
        return $this->watering >= 5;
    }
}