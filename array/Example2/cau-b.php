<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<?php
$data = file('option.txt') or die("Can\'t read file");
$arrayOption = array();
foreach ($data as $key => $info){

    if ($key != 0){
        $tmp = explode("|", $info);
        $arrayOption[$tmp[0]][$tmp[1]]['option'] = $tmp[2];
        $arrayOption[$tmp[0]][$tmp[1]]['point'] = $tmp[3];
    }
}

/*echo "<pre>";
print_r ($arrayOption);
echo "</pre>";*/


/*$newArray[11][a][option] = 'Vào buổi sáng';
$newArray[$tmp[0]][$tmp[1]]['option'] = $tmp[2]

$newArray[11][a][point]= 2
$newArray[$tmp[0]][$tmp[1]]['point'] = $tmp[3];*/

//$tmp là biến tam, $newArray là mảng mới chứa biến tạm và các phần tử trong biến tạm