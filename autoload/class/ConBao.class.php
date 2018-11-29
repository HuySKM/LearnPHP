<?php
require_once 'ConMeo.class.php';

class ConBao extends ConMeo {
    public static $maxSpeed = '90km/h';

    public function showInfo() {
        echo '<br> Tên: ' . parent::getName();
        echo '<br> Tuổi: ' . parent::getAge();
        echo '<br> Màu sắc: ' .parent::getColor();
        echo '<br> Nó đang làm cái quái gì vậy? ' . parent::run();
        echo '<br> Tốc độ tối đa: ' . ConBao:: $maxSpeed;
    }
}