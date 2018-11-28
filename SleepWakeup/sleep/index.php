<?php
require_once 'ConMeo.class.php';
$conMeo = new ConMeo();
$conMeo->setName('Vãi');
$conMeo->setAge(18);
$conMeo->setColor('Vàng đen');

echo "<pre>";
print_r($conMeo);
echo "</pre>";

$data = serialize($conMeo);
echo "<br>" . $data;
$conMeo->save($data);
