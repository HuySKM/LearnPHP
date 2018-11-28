<?php
abstract class Toyota {

    abstract public function engine();

    abstract public function body (array $color);

    public function seats (){

    }

    public function color (){

    }
}

class Camry extends Toyota {

    public function engine()
    {
        return 'Sử dụng động cơ V8.0';
    }

    public function body(array $color)
    {
        $strColor = '';

        for ($i = 0; $i <= count($color); $i++){
         $strColor .=  $color[$i] . ', ';
        }
        return "body: " . $strColor;
    }
}

