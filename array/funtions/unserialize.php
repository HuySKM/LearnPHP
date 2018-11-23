<?php
$str = 'a:3:{i:0;a:4:{s:2:"id";i:1;s:4:"Name";s:5:"Nokia";s:5:"price";i:100;s:8:"quantity";i:2;}i:1;a:4:{s:2:"id";i:2;s:4:"Name";s:7:"Samsung";s:5:"price";i:120;s:8:"quantity";i:1;}i:2;a:4:{s:2:"id";i:3;s:4:"Name";s:5:"Apple";s:5:"price";i:120;s:8:"quantity";i:1;}}';
echo $str;

$tmp = unserialize($str);

echo "<pre>";
print_r ($tmp);
echo "</pre>";

// Hàm unsirealize biến chữ đặc biệt thành mảng, dùng để lưu được những dữ liệu có độ phức tạp cao
