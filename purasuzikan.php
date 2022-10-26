<?php
/*入力される行数
　 12:00 0 1のように時間と時と分に加算する数字が与えられる*/
function minute($minute,$hour,$a,$b){
    $minute = $minute + $a;
    if($minute >= 60){
        $minute = $minute - 60;
        $hour++;
    }
    $hour = $hour + $b;
    if($hour >= 24){
        $hour = $hour -24;
    }
    $minute = str_pad($minute,2,"0",STR_PAD_LEFT);
    $hour = str_pad($hour,2,"0",STR_PAD_LEFT);
    $newtime = [$hour, $minute];
    return $newtime;
}

$input_line = trim(fgets(STDIN));
for($i=0; $i<$input_line; $i++){
    $input = trim(fgets(STDIN));
    $space_array = explode(" ", $input);
    $time_array = explode(":", $space_array[0]);

    echo implode(":", minute($time_array[1], $time_array[0], $space_array[2], $space_array[1]))."\n";
}

?>