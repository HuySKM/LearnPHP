<?php
$array1 = array("A" => "Green", "B" => "Brown", "C" =>"Blue", "Red");
$array2 = array("A" => "Green", "Yellow", "Red");

echo "<pre>";
print_r ($array1);
echo "</pre>";

echo "<pre>";
print_r ($array2);
echo "</pre>";

$result = array_intersect_assoc($array1,$array2 );

echo "<pre>";
print_r ($result);
echo "</pre>";


// Hàm so sánh Arr1 vs Arr2 và lấy ra các phần tử có cùng key và value của arr1 và arr2