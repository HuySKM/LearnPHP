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

// Thay thế tên SV1 = giá trị mới

$students ["SV1"]["name"] = "Hoang";

// Thay diem SV1 bang gia tri moi

$students ["SV1"]["points"][2] = 10;


echo "<pre>";
print_r ($students);
echo "</pre>";