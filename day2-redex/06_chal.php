<?php

require __DIR__ . "/vendor/autoload.php";

// … your function here

dump(threeOs("Hello")); // false
dump(threeOs("Helloo")); // false
dump(threeOs("Hellooo")); // true
dump(threeOs("HelloOoOo")); // true

// Create a function, threeOs, that returns true if a string contains three or more o or O characters in a row.