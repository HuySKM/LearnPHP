<?php
require_once 'ConBao.class.php';
$arrayCatInfo = array();
$arrayCatInfo ['name'] = 'MaBu';
$arrayCatInfo ['age'] = 18;
$arrayCatInfo ['color'] = 'Xam';
$arrayCatInfo ['weight'] = '50kg';
$arrayCatInfo ['height'] = '165cm';

$conBaoA = new ConBao ($arrayCatInfo);
$conBaoA->showInfo();

/*$conMeoA = new ConMeo($arrayCatInfo);
$conMeoA-> showInfo();*/
