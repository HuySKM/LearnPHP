<?php
class Test {
    var $foo = 10;
    var $bar, $baz;
    function __construct()
    {
        $this->bar = $this->foo *10;
        $this->baz = $this->foo *100;

    }
}

$test = new Test();
echo "<pre>";
print_r($test);
echo "</pre>";

echo "<br> Chuyển đổi đối tượng Test thành 1 chuỗi đặc biêt";

$tmp = serialize($test);
echo '<br>' . $tmp;
