<?php
$input = trim(fgets(STDIN));

$n_x = explode(" ", $input);

$nisin = decbin($n_x[1]);
$nisin_array = str_split($nisin);


$anoInput = trim(fgets(STDIN));
while($anoInput){
        $key_num = count($nisin_array) - $anoInput;
        echo $nisin_array[$key_num] . "\n";
        $anoInput = trim(fgets(STDIN));
    }