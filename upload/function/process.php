
<?php

$file_name = $_FILES['upload']['name'];

$extent_file = "gif|jpg|png";

$pattern = '#.+\.(gif|jpg|png)$#i';

    if(preg_match($pattern, $file_name) == 1){
        $file_type = true;

    }else {
        $file_type = false;
    }
    if($file_type == true){
        $source = $_FILES['upload']['tmp_name'];

        $dest = 'images/' . $_FILES['upload']['name'];

        if (@copy($source, $dest) == 1){

            $flag = true;
        }else {

            $flag = false;
        }

    }

    if($flag == true){

        echo "<br> Upload thành công";
    }else {

        echo "<br> Upload thất cmn bại";
    }


echo "<pre>";
print_r($_FILES['upload']);
echo "</pre>";
