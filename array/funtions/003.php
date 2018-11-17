<?php
$array = array("Size"=>"XL", "Color"=>"Gold");

echo "<pre>";
print_r ($array);
echo "</pre>";

$array2 = array_values($array);

echo "<pre>";
print_r ($array2);
echo "</pre>";


// Hàm lấy ra mảng có sẵn ban đầu & thay thế bằng mảng mới