<?php

class Account {

    const money = 10000;
    public $money = 'Số tiền trong TK';

    public function showInfo () {
        echo __METHOD__;
        echo $this->money . ' : ' . self::money;
    }
}

$acc = new Account();
// echo $acc->money . ' : ' . Account::money;
$acc->showInfo();