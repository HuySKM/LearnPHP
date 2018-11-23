<?php
$stack = array ("Chuoi", "Tao", "Cam", "Nho");
echo "<pre>";
print_r ($stack);
echo "</pre>";

$tmp = array_shift($stack);

echo "<pre>";
print_r ($tmp);
echo "</pre>";

echo "<pre>";
print_r ($stack);
echo "</pre>";

// Hàm loại bỏ phần tử đầu tiên của màng (array_shift) trong đó (stack là biến tạm)