<?php

namespace App;

class Person
{
    private $first;
    private $second;

    public function __construct($first, $last)
    {
        $this->first = $first;
        $this->second = $last;
    }

    public function fullName() : string
    {
        return $this->first." ".$this->second;

    }

    public function sayHelloTo($name) : string
    {
        return "Hello,{$name->fullName()}";
    }







}