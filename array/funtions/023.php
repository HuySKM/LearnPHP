<?php
$array1 = array("A" => "Green", "Red", "Blue", "Red");
$array2 = array("B" => "Green", "Yellow", "Red");

$result = array_diff($array1,$array2 );

echo "<pre>";
print_r ($result);
echo "</pre>";
// Hàm tìm những phần tử trong mảng 1 không tồn tại trong mảng 2 (array_dift)