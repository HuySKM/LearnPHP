<?php
    function __autoload($class_name) {

        $patch = 'class/';
        //require_once 'class/ConBao.class.php';
        require_once $patch . "{$class_name}.class.php";

    }

    $conMeoA = new ConMeo();
    $conMeoA->showInfo();

    echo '<br>-------------<br>';

    $conBaoA = new ConBao();
    $conBaoA->showInfo();