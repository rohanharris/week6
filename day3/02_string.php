<?php

require __DIR__ . "/vendor/autoload.php";

class StringyRedux
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function lower()
    {
        $this->string = strtolower($this->string);
        return $this;
    }

    public function repeat($number)
    {
        $this->string = str_repeat($this->string, $number);
        return $this;
    }

    public function upper()
    {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function append($string)
    {
        $this->string .= $string;
        return $this;
    }

    public function get()
    {
        return $this->string;
    }




}

$string1 = new StringyRedux("Oop");
dump($string1->lower()->repeat(2)->get()); // "oopoop"

$string2 = new StringyRedux("Spoon");
dump($string2->repeat(2)->upper()->append("!")->get()); // "SPOONSPOON!"

$string3 = new StringyRedux("Na");
dump($string3->repeat(2)->append(" ")->repeat(8)->append(" ")->append("Batman!")->get()); // "NaNa NaNa NaNa NaNa NaNa NaNa

// if remove the second append("") it will get rid of the second space before "Batman!". str_repeat is repeating the string and the appended space 8 times not just the string which it would do in the for loop in the answer??