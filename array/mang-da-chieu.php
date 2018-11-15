<?php

$students = array();

$students ["SV1"] = array("id"=>1,
                        "name"=>"Tuan",
                        "age"=>20,
                        "points"=> array(10,9,8));

$students ["SV2"] = array("id"=>2,
                        "name"=>"Long",
                        "age"=>22,
                        "points"=> array(7,9,8));

$students ["SV3"] = array("id"=>1,
                        "name"=>"Long",
                        "age"=>18,
                        "points"=> array(9,8,8));

echo "<pre>";
print_r ($students);
echo "</pre>";