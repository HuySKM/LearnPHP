<?php
$input = array("A" => "Green", "Red", "B" => "Green", "Blue", "Red");

echo "<pre>";
print_r ($input);
echo "</pre>";

$result = array_unique($input);

echo "<pre>";
print_r ($result);
echo "</pre>";


// Hàm loại trừ các phần tử trùng nhau trong 1 mảng (array_unique)