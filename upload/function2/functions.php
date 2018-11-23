<?php
function check_file_extent($file_name, $file_extent ){


    $pattern = '#.+\.(' . $file_extent . ')$#i';

    if(preg_match($pattern, $file_name) == 1){
        $file_type = true;

    }else {
        $file_type = false;
    }
    return $file_type;
}

function upload ($file_name, $upload_path){

    $source = $_FILES[$file_name]['tmp_name'];

    $dest = $upload_path . $_FILES[$file_name]['name'];

    if (@copy($source, $dest) == 1){

        $flag = true;
    }else {

        $flag = false;
    }

return $flag;
}