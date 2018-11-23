<?php
$stack1 = array ("Chuoi", "Tao");
$stack2 = array ("Cam", "Nho");
$stack3 = array ("Bưởi", "Quýt");

$stack = array_merge($stack1,$stack2,$stack3);

echo "<pre>";
print_r ($stack);
echo "</pre>";

// Hàm gộp mảng (array_merge)