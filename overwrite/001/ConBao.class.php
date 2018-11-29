<?php
require_once 'ConMeo.class.php';
class ConBao extends ConMeo {
    public function showInfo ( ) {
        echo '<br>' . __METHOD__;
        echo '<br> Đây là lớp thể hiện Con Báo';
    }

}