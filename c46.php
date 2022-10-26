<?php
$noinput = trim(fgets(STDIN));
$input = trim(fgets(STDIN));
$peaple = explode(" ", $input);

function Same($x,$y){
    return $x + $y;
}

$num = trim(fgets(STDIN));
for($i = 0; $i < $num; $i++){
    $input1 = trim(fgets(STDIN));
    $person = explode(" ", $input1);
    if ($i >= 1 && $toriaezu[0] == $person[0]){
        $person[1] = Same($toriaezu[1],$person[1]);
    }
    foreach($peaple as $participant){
        if($person[0] == $participant){
            $array[$participant] = $person[1];
        }
    }
        $toriaezu = $person;
    }
arsort($array);
$key = array_keys($array);
foreach($key as $result){
    echo $result . "\n";
}


?>