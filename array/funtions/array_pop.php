<?php
$array = array ("Chuoi", "Tao", "Cam", "Nho");
echo "<pre>";
print_r ($array);
echo "</pre>";

$tmp = array_pop($array);

echo "<pre>";
print_r ($tmp);
echo "</pre>";

echo "<pre>";
print_r ($array);
echo "</pre>";

// Hàm loại bỏ phần tử ở cuối mảng (array_pop)
