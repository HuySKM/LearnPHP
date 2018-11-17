<?php
$input = array("A", "B", "C", "D", "E");
echo "<pre>";
print_r ($input);
echo "</pre>";

$output = array_slice($input, -4, 1);

echo "<pre>";
print_r ($output);
echo "</pre>";

// Hàm cắt 1 mảng ra 1 mảng khác (array_slice)