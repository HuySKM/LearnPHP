<?php

require_once 'functions.php';

$file_name = $_FILES['upload']['name'];

$extent_file = "gif|jpg|png";

$file_type = false;
if(check_file_extent($file_name,$extent_file) == true ){
    $file_type = true;
}

if($file_type == true) {
    $flag = upload('upload', 'images/');

    if ($flag == true) {

        echo "<br> Upload thành công";
    } else {

        echo "<br> Upload thất cmn bại";
    }
}

