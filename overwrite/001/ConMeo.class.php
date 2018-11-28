<?php

class ConMeo {
    private $name;
    private $age;
    private $color;
    private $weight;
    private $height;

    public function __construct($arrayParam)
    {
        echo __METHOD__;
        $this->name = $arrayParam['name'];
        $this->age = $arrayParam['age'];
        $this->color = $arrayParam['color'];
        $this->weight = $arrayParam['weight'];
        $this->height = $arrayParam['height'];
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
        echo '<br> Tên con mèo: ' . $this->getName();
        echo '<br> Tuổi con mèo: ' . $this->getAge();
        echo '<br> Màu sắc: ' . $this->getColor();
        echo '<br> Cân nặng: ' . $this->weight;
        echo '<br> Chiều cao: ' . $this->height;
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
