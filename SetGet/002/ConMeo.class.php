<?php
class ConMeo {
    private $data;



    public function __construct (){
    echo __METHOD__;

}
    public function __set ($name, $value){
    return $this->data [$name] = $value;
}

    public function __get ($name) {
    return $this->data[$name];
}

    public function showInfo (){
    echo '<br> Tên: ' . $this->getName ();
    echo '<br> Tuổi: ' . $this->getAge ();
    echo '<br> Màu sắc: ' . $this->getColor ();
}

}