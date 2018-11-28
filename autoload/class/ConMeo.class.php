<?php

class ConMeo {
    private $name;
    private $age;
    private $color;
    public static $maxSpeed = '30km/h';

    public function __construct($name = 'MaiMai', $age = 5 , $color = 'Trắng')
    {
        echo __METHOD__;
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    /**
     * @param string $name
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setAge($value)
    {
        $this->age = $value;
    }

    /**
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }
    public function setColor($value)
    {
        $this->color = $value;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }


    public function showInfo() {
        echo '<br> Tên: ' . $this->getName();
        echo '<br> Tuổi: ' . $this->getAge();
        echo '<br> Màu sắc: ' . $this->getColor();
        echo '<br> Nó đang làm cái quái gì vậy? ' . ConMeo::run();
        echo '<br> Tốc độ tối đa: ' . ConMeo:: $maxSpeed;
    }

    public function run (){
        return "It is running";
    }

    public function shout (){
        return "It is shoutting";
    }

    public function climb (){
        return "It is climbing";
    }
}
