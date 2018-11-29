<?php
require_once 'ConMeo.class.php';
$conMeoA = new ConMeo();
$conMeoA-> showInfo();

$conMeoB = new ConMeo ('John', 9, 'Brow');
$conMeoB-> showInfo();