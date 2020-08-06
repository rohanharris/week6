<?php
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";


// NEED TO FINISH 

class Address 
{
    private $street;
    private $town;
    private $postcode;
    


    public function __construct($street, $town, $postcode)
    {
        $this->street = $street;
        $this->town = $town;
        $this->postcode = $postcode;
            
    }

    public function setStreet(string $name) : string
    {
        $this->street = $name;
        return $this->street;
    }

    public function setTown(string $name) : string
    {
        $this->town = $name;
        return $this->town;
    }

    public function setPostcode(string $name) : string
    {
        $this->postcode = $name;
        return $this->postcode;
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