<?php
//黒電話、与えられた電話番号で黒電にかけたときのダイヤルの移動距離を求める。

//ダイヤルの移動距離、キーがダイヤル番号
$way = array(12, 3, 4, 5, 6, 7, 8, 9, 10, 11);

$input = trim(fgets(STDIN));
//ハイフン区切りでリストを作る
$numbers = explode("-", $input);

$anser = 0;
//numbersの配列を順番に調べる
foreach($numbers as $num){
    //連続した数字を分割して、$arrayに入れる
    $array = str_split($num);
    //$arrayのリストを順番に調べる。$array_numには一桁のダイヤル番号が入っている
    foreach($array as $array_num){
        $result = $way[$array_num]; //移動距離を$resultに入れる
        $anser += $result; //移動距離を足し算する
    }
}

echo $anser *2; //移動距離は往復だから２倍して出力
?>