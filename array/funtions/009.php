<?php
$stack = array ("Chuoi", "Tao", "Cam", "Nho");
echo "<pre>";
print_r ($stack);
echo "</pre>";
$tmp = array_flip($stack);

echo "<pre>";
print_r ($tmp);
echo "</pre>";

// Hàm đảo ngược lại vị trí của khóa (key) và giá trị (value)