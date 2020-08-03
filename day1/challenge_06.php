<?php 
require __DIR__ . "/vendor/autoload.php";

$sum = 0;

for ($i = 1; $i <= 50; $i += 1){
    $sum = $sum + $i;
    dump($sum);
}