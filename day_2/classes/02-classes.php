<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch{
    private $on = false;

    public function isOn()
    {
        return $this->on;
    }
    public function turnOn()
    {
        // Need to turn $on from false to true
        $this->on = true;
    }
    public function turnOff()
    {
        // Need to turn $on from true to false
        $this->on = false;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false