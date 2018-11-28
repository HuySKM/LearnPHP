<?php

$conMeoA = new ConMeo ();

/*echo '<br>' . $conMeoA->name;
echo '<br>' . $conMeoA->age;
echo '<br>' . $conMeoA->color;*/

$conMeoA->setName('Mai');
$conMeoA->setAge(2);
$conMeoA->setColor('Đen');

echo '<br> Tên con mèo là: ' . $conMeoA->getName();
echo '<br> Tuổi con mèo là: ' . $conMeoA->getAge();
echo '<br> Màu sắc con mèo là: ' . $conMeoA->getColor();

$conMeoB = new ConMeo ();
$conMeoB->setName('Doreamon');
$conMeoB->setAge(200);
$conMeoB->setColor('Vàng');

echo '<br> Tên con mèo là: ' . $conMeoB->getName();
echo '<br> Tuổi: ' . $conMeoB->getAge();
echo '<br> Màu sắc: ' . $conMeoB->getColor();

class ConMeo {
    private $name;
    private $age;
    private $color;

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
    public function getName(): string
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
    public function getAge(): string
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
    public function getColor(): string
    {
        return $this->color;
    }
}
