<?php
$num = trim(fgets(STDIN));

for($i = 0; $i < $num; $i++){
    $input = trim(fgets(STDIN));
    $array = explode(" ", $input);

    $array2[$i] = $array;
}
foreach($array2 as $array3){
        $array_max[] = max($array3);
}
foreach($array2 as $array4){
    $array_min[] = min($array4);
}

echo $array2[0][0] . " " . $array2[$num-1][1] . " " . max($array_max) . " " . min($array_min);
