<?php
require_once 'ConMeo.class.php';

$conMeoA = new ConMeo ();
$conMeoA-> name = "MaiMai";
$conMeoA-> age = 18;
$conMeoA-> color = "Vàng";
$conMeoA-> weight = "48kg";
$conMeoA-> height = "165";



echo "<pre>";
print_r($conMeoA);
echo "</pre>";