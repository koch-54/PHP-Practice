<?php
   $hate = trim(fgets(STDIN));
   $line = trim(fgets(STDIN));
   for($i=0; $i<$line; $i++){
       $room = trim(fgets(STDIN));
       if(strpos($room,$hate)!==false){ //文字列の中にある文字列が含まれている場合trueを返すがstrpos()===tureではなくstrpos()!==falseとかく
           $noroom[] = $room;
       }else{
           $yesroom[] = $room;
       }
   }
   if(empty($yesroom)){
       echo "none";
   }else{
       for($i=0;$i<count($yesroom);$i++){
           echo $yesroom[$i]."\n";
       }
   }
?>