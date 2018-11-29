<?php
require_once 'ConMeo.class.php';

$conMeoA = new ConMeo();
$conMeoA->setName('Hoor');
$conMeoA->setAge(5);
$conMeoA->setColor('Trang');

$conMeoB = $conMeoA;
$conMeoB->setName('Maradona');
$conMeoB->setAge(500);
$conMeoB->setColor('Vàng');

echo '<br>-----------------<br>';
echo 'In thong tin con meo A';
$conMeoA->showInfo();

echo '<br>-----------------<br>';
echo 'In thong tin con meo B';
$conMeoB->showInfo();