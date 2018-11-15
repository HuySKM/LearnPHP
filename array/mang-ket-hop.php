<?php

// Cach 1
$ages = array("Tuan" =>21, "Quang"=>30, "Hung"=>33);

//Cach 2

$ages ["Tuan"] = 21;
$ages ["Quang"] = 30;
$ages ["Hung"] = 33;

echo $ages["Quang"];

echo "<pre>";
print_r($ages);
echo "</pre>";

foreach ($ages as $key => $value){
    echo $key . ": " . $value . "<br>";
}