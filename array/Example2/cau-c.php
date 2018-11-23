<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<?php
require_once 'cau-a.php';  // $arrayQuestion
require_once 'cau-b.php'; // $arrayOption

$newArray = array();
foreach ( $arrayQuestion as $key => $info){
    $newArray[$key]['question'] = $info['question'];
    $newArray[$key]['answer'] = $arrayOption[$key];
};

/*echo "<pre>";
print_r ($newArray);
echo "</pre>";*/