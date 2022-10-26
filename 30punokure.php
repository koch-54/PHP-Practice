<?php
//12:00のように与えられた時間を30分遅れにして出力する
function Minute($minute,$hour){
    $minute = $minute -60;
    $minute = str_pad($minute,2,"0",STR_PAD_LEFT);
    $hour++;
    $hour = str_pad($hour,2,"0",STR_PAD_LEFT);
    $newtime = [$hour, $minute];
    return $newtime;

}
$input = trim(fgets(STDIN));
$time_list = explode(":",$input);
$mini = $time_list[1] +30;
if($mini >= 60){
    echo implode(":",Minute($mini,$time_list[0]));
}else{
    $time_list[1] = $mini;
    echo implode(":",$time_list);
}


?>