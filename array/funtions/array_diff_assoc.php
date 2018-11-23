<?php
$array1 = array("A" => "Green", "B" => "Brown", "C" =>"Blue", "Red");
$array2 = array("A" => "Green", "Yellow", "Red");

$result = array_diff_assoc($array1,$array2 );

echo "<pre>";
print_r ($result);
echo "</pre>";

// Hàm so sánh mảng 1 không cùng khóa với mảng 2 (array_dift_assoc)