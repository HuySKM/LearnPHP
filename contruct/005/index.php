<?php
require_once 'ConMeo.class.php';
$arrayCatInfo = array();
$arrayCatInfo ['name'] = 'Doreamon';
$arrayCatInfo ['age'] = 8;
$arrayCatInfo ['color'] = 'Yellow';
$arrayCatInfo ['weight'] = '50kg';
$arrayCatInfo ['height'] = '165cm';

$conMeoA = new ConMeo($arrayCatInfo);
$conMeoA-> showInfo();
