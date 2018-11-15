<?php

// Cach 1
$car = array("Audi", "Toyota", "BMW", "Ford");

// Cach 2

$car [0] = "Audi";
$car [1] = "Toyota";
$car [2] = "BMW";
$car [3] = "Ford";


// Cach 3

/*$car [] = "Audi";
$car [] = "Toyota";
$car [] = "BMW";
$car [] = "Ford";*/

/*echo $car[1]. "<br>";
echo $car[3];*/

for($i = 0; $i < count($car); $i++){
    echo $car[$i] . "<br>";
}