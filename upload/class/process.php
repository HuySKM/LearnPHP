<?php

require_once 'upload.class.php';

if(!empty($_POST)){
    $upload = new Upload('upload');
}

echo "<pre>";
print_r($_POST);
echo "</pre>";