<?php

//trait SetGetName
trait SetGetName
{
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAll()
    {
        return $this->getName();
    }

}

//trait SetGetAge
trait SetGetAge
{
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAll()
    {
        return $this->getAge();
    }
}

class ConNguoi
{
    private $name;
    private $age;
    //gọi trait
    use SetGetName, SetGetAge;
}
//chương trình báo lỗi.
//Fatal error: Trait method getAll has not been applied,
//because there are collisions with other trait methods on ConNguoi