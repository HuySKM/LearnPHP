<?php
$fruits = array("Lemon", "Orange", "Banana", "Apple");
$rand_keys = array_rand($fruits, 2);
echo "<pre>";
print_r ($rand_keys);
echo "</pre>";

// Hàm lấy ra ngẫu nhiên (array_rand) các key trong 1 mảng