<h1>Kỹ thuật đệ qui</h1>
<?php
        $menu = array();
        $menu [] = array('id'=>1, 'name'=>'Home', 'parents'=>0);
        $menu [] = array('id'=>2, 'name'=>'About', 'parents'=>0);
        $menu [] = array('id'=>3, 'name'=>'News', 'parents'=>0);
        $menu [] = array('id'=>4, 'name'=>'Products', 'parents'=>0);
        $menu [] = array('id'=>5, 'name'=>'Contact', 'parents'=>0);
        $menu [] = array('id'=>6, 'name'=>'Tin trong nước', 'parents'=>3);
        $menu [] = array('id'=>7, 'name'=>'Tin nước ngoài', 'parents'=>3);
        $menu [] = array('id'=>8, 'name'=>'CNTT', 'parents'=>6);
        $menu [] = array('id'=>9, 'name'=>'Lập trình', 'parents'=>6);
        $menu [] = array('id'=>10, 'name'=>'Châu Âu', 'parents'=>7);
        $menu [] = array('id'=>11, 'name'=>'Châu Mỹ', 'parents'=>7);
        $menu [] = array('id'=>12, 'name'=>'Software', 'parents'=>4);
        $menu [] = array('id'=>13, 'name'=>'Mobile', 'parents'=>4);
        $menu [] = array('id'=>14, 'name'=>'Anti Virus', 'parents'=>12);
        $menu [] = array('id'=>15, 'name'=>'Phần mềm', 'parents'=>12);
        $menu [] = array('id'=>16, 'name'=>'Apple', 'parents'=>13);
        $menu [] = array('id'=>17, 'name'=>'Samsung', 'parents'=>13);
        $menu [] = array('id'=>18, 'name'=>'Oppo', 'parents'=>13);
        $menu [] = array('id'=>19, 'name'=>'Nokia', 'parents'=>13);
        $menu [] = array('id'=>20, 'name'=>'Huawei', 'parents'=>13);
        $menu [] = array('id'=>21, 'name'=>'Iphone XS Max', 'parents'=>16);
        $menu [] = array('id'=>22, 'name'=>'Iphone X', 'parents'=>16);
        $menu [] = array('id'=>23, 'name'=>'Galaxy A7', 'parents'=>17);
        $menu [] = array('id'=>24, 'name'=>'Galaxy A9', 'parents'=>17);
        $menu [] = array('id'=>25, 'name'=>'Galaxy Note 9', 'parents'=>17);

        function recursive ($sourceArr, $parents = 0, $level = 1, & $resultArr){
            if(count($sourceArr)> 0){
                foreach ($sourceArr as $key => $value){
                  if($value['parents']== $parents){
                    $value['level'] = $level;
                    $resultArr[] = $value;
                    $newParents = $value['id'];
                    unset($sourceArr[$key]);
                    recursive ($sourceArr, $newParents, $level + 1,$resultArr);
                    }
                }
            }
        }

        recursive ($menu, 0, 1,$newArray);

        foreach ($newArray as $key =>$value){
            if($value['level'] == 1){
                echo '<div style ="border: 1px solid #CCC">+ ' . $value['name'] . '</div>';
            }else {
                $padding = ($value['level'] - 1) * 20;
                $padding = 'padding-left: ' . $padding . 'px;';
                echo '<div style ="border: 1px solid #CCC;' . $padding . '">- ' . $value['name'] . '</div>';
            }

        }
            echo "<pre>";
            print_r($newArray);
            echo "</pre>";