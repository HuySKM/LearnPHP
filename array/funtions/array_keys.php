<?php
$array = array("Size"=>"XL", "Color"=>"Gold");

$tmp = array_keys($array);

// Mảng lồng
$arr = array(
    "Color" => array("blue", "red", "green"),
    "Size" => array("Small", "Medium", "Large"),
);

echo "<pre>";
print_r ($arr);
echo "</pre>";

$tmp = array_keys($arr);

echo "<pre>";
print_r ($tmp);
echo "</pre>";

// Hàm lấy ra keys trong mảng ban đầu
