<?php

// Nhúng 2 file chứa trait
include_once 'SetGetName.php';
include_once 'SetGetAge.php';

//khai báo class ConNguoi
class ConNguoi
{
    private $name;
    private $age;
    //gọi trait SetGetName
    use SetGetName;
    //gọi trait SetGetAge
    use SetGetAge\SetGetAge;
}

//khởi tạo đối tượng.
$connguoi = new ConNguoi();
// set name;
$connguoi->setName('Huy Nguyen');
// get name;
echo $connguoi->getName();
//Tạo khoảng trắng cho dễ phân biệt
echo '<br/>';
// set age
$connguoi->setAge(33);
//get age
echo $connguoi->getAge();

//Kết quả chương trình trả về
//Huy Nguyen
//33