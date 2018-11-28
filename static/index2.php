<h1>Static</h1>
<?php

$year2016 = new Account ();
$year2016->year(2016);

$year2017 = new Account ();
$year2017->year(2017);


$year2018 = new Account ();
$year2018->year(2018);

$year2019 = new Account ();
$year2019->year(2019);


$year2020 = new Account ();
$year2020->year(2020);

class Account {
    static $taiKhoan = 100000;

    public function year($value) {
        echo '<br> Số tiền ban đầu: ' . self:: $taiKhoan;

        $laisuat = self::$taiKhoan * 10/100;

        echo '<br> Số tiền lãi: ' . $value . ' : ' . $laisuat;


        self:: $taiKhoan = self:: $taiKhoan + $laisuat;

        echo '<br> Tổng số tiền trong TK: ' . self:: $taiKhoan;
        echo '<br>-------------------------------------';
    }

}