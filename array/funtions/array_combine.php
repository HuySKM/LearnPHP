<?php
$a = array('green', 'red', 'yellow');
$b =array('avocado', 'apple', 'banana');

echo "<pre>";
print_r ($a);
echo "</pre>";

echo "<pre>";
print_r ($b);
echo "</pre>";

$result = array_combine($a,$b );

echo "<pre>";
print_r ($result);
echo "</pre>";

// Hàm dùng để nhập 2 mảng thành mảng mới. Giá trị thứ 1 là key, giá trị thứ 2 sẽ là value của mảng mới
//(Hàm này sử dụng khi 2 mảng phải cùng số phần tử)