<?php
$a = range("a", "z");
for($i=0; $i<=25; $i++){
    $aisyou[$a[$i]] = $i+1; //数列A
}


function strnumber($array1, $array2){
    global $aisyou;
    foreach($array1 as $word){
        $neoaisyou1[] = $aisyou[$word];
    }
    foreach($array2 as $word){
        $neoaisyou2[] = $aisyou[$word];
    }
    $hutari = array_merge($neoaisyou1, $neoaisyou2); //配列の結合
    return $hutari;
}


function tasizan($couple){
    for($i=0; $i<count($couple)-1; $i++){
        $newarray[] = $couple[$i] + $couple[$i+1];
        if($newarray[$i]>=101){
            $newarray[$i] = $newarray[$i]-101;
        }
    }
    return $newarray;
}

[$human, $human1] = explode(" ", trim(fgets(STDIN)));
$one = str_split($human);
$two = str_split($human1);


$hutari1 = strnumber($one, $two);
$renewarray = tasizan($hutari1);
while(count($renewarray) > 1){
    $renewarray = tasizan($renewarray);
}
print_r($renewarray);

$hutari2 = strnumber($two, $one);
$renewarray2 = tasizan($hutari2);
while(count($renewarray2) > 1){
    $renewarray2 = tasizan($renewarray2);
}
print_r($renewarray2);

$result = array_merge($renewarray, $renewarray2);
echo max($result);
?>