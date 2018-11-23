<?php
$array1 = array("A" => "Green", "Red", "Blue");
$array2 = array("B" => "Green", "Yellow", "Red");

echo "<pre>";
print_r ($array1);
echo "</pre>";

echo "<pre>";
print_r ($array2);
echo "</pre>";

$result = array_intersect($array1,$array2);

echo "<pre>";
print_r ($result);
echo "</pre>";

// Hàm so sánh mảng 1 vs mảng 2 => Kq trả về key và giá trị trong Arr1. Nếu giá trị Arr1 tồn tại trong mảng 2