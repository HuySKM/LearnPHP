<?php
$array = array('Lastname', 'Email', 'Phone');

echo "<pre>";
print_r ($array);
echo "</pre>";

$tmp = implode('|', $array);

echo "<pre>";
print_r ($tmp);
echo "</pre>";


// Hàm tách phần tử trong mảng và đưa vào thành 1 chuỗi (implode)