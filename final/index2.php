<?php
final class main {

    public function bar (){

        echo 'Chạy thử chức năng đối với khoa FINAL';
    }
}

class child extends main {

    public function bar () {

        echo 'Chạy thử chức năng đối với khóa FINAL tại lớp con';
    }
}


$test = new child();
$test->bar();