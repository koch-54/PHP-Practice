<?php
/*Quetion
    要素数、配列、基準となる値の数、基準となる値（２つ）が改行区切りで与えられる
    一つ目の基準以上、二つ目の基準以下の要素の個数を出力する*/
    
function lower_bound($list, $element, $serch){
    //lower_bound
    $left = 0;
    $right = $element;
    while($left < $right){
        $mid = (int)(($left+$right) / 2);
        if($list[$mid] < $serch){
            $left = $mid  + 1;
        }else{
            $right = $mid;
        }
    }
    return $right;
}

function upper_bound($list, $element, $serch){
    //upper_bound
    $left = 0;
    $right = $element;
    while($left < $right){
        $mid = (int)(($left + $right) / 2);
        if($list[$mid] <= $serch){
            $left = $mid + 1;
        }else{
            $right = $mid;
        }
    }
    return $right;
}


$g_element = trim(fgets(STDIN));
$g_list = explode(" ", trim(fgets(STDIN)));
sort($g_list);


$line = trim(fgets(STDIN));
for($i=0; $i<$line; $i++){
    [$a, $b] = explode(" ", trim(fgets(STDIN)));
    $kijun1 =  lower_bound($g_list, $g_element, $a);
    $kijun2 =  upper_bound($g_list, $g_element, $b);
    $result = $kijun2 - $kijun1;
    echo $result."\n";
}
?>