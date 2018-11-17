<?php
$cart = array();

$cart [] = array('id'=> 1, 'Name'=> 'Nokia', 'price'=> 100, 'quantity'=>2);
$cart [] = array('id'=> 2, 'Name'=> 'Samsung', 'price'=> 120, 'quantity'=>1);
$cart []= array('id'=> 3, 'Name'=> 'Apple', 'price'=> 120, 'quantity'=>1);

echo "<pre>";
print_r ($cart);
echo "</pre>";

$str = serialize($cart);
echo $str;
//Hàm serialize dùng để biến thành chuỗi đặc biệt để lưu vào database