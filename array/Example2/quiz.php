<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
<?php
require_once 'cau-c.php';  // $newArray

/*echo "<pre>";
print_r ($newArray);
echo "</pre>";*/
?>

<form action="result.php" method="POST" enctype="application/x-www-form-urlencoded">
    <?php
    foreach ($newArray as $key => $info){

        echo '<br><b>'. $key . ' - ' . $info['question'] . '</b>';
        foreach ($info['answer'] as $key_1 => $info_1){
            echo '<br><input type="radio" name="' . $key . '" value="'. trim($info_1['point']).'" > '
. $info_1['option'];
        }
        echo '<br>---------------------------------------------------------';
    }

    ?>
<br><br>
    <input type="submit" value="Submit" name="submit"></input>
</form>
