<?php

require __DIR__ . "/vendor/autoload.php";

class LightSwitch
{
    private $lightOn = false;


    public function turnOn()
    {
        $this->lightOn = true;

    }

    public function turnOff()
    {
        $this->lightOn = false;


    }


    public function isOn()
    {
       return $this->lightOn;



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