<?php

require __DIR__ . "/vendor/autoload.php";

function phoneNumber($str){
    return preg_match("/^[0-9-]+$/", $str) === 1;
}

dump(phoneNumber("blah")); // false
dump(phoneNumber("12-323-5-344")); // true
dump(phoneNumber("12-34-a334-43")); // false
dump(phoneNumber("--123----23123")); // true




// Create a function phoneNumber, that returns true if the given string contains only numbers and hyphens:

//     Hint: you can use both anchors (^ and $) in the same regex