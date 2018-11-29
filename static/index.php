<h1>Static</h1>
<?php

$acc = new Account ();
echo Account::$taiKhoan;
echo '<br>' . $acc->test ();
echo '<br>' . Account :: test ();

class Account {
    static $taiKhoan = 100;

    static function test (){
        return 'Static Method';
    }
}