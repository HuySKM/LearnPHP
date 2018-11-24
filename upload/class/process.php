<?php

require_once 'upload.class.php';

if(!empty($_POST)){

    $upload = new Upload('upload');
    $upload->setFileExtension('jpg|gif|png');
    $upload->setFileSize(100000);
    $upload->setUploadDir('images/');
    if($upload->isVail() == false){
        $upload-> upload(true);
    }else{
        echo "<pre>";
        print_r($upload->_errors);
        echo "</pre>";
    }



}
