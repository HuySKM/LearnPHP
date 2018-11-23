<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<?php
$data = file('question.txt') or die("Can\'t read file");

        /*echo "<pre>";
        print_r ($data);
        echo "</pre>";*/

foreach ($data as $key => $info){
    if ($key != 0){

        $tmp = explode("|", $info);

       /* echo "<pre>";
        print_r ($tmp);
        echo "</pre>";*/

        $arrayQuestion [$tmp[0]] = array('question' => $tmp[1]);

    }
}
       /* echo "<pre>";
        print_r ($newArray);
        echo "</pre>";*/

// $tmp là biến tạm