<?php

$left  = 4;
$right = 4;
$i = 1;

while($i <= 5 ) {
     $j=0;
     while($j<5){
        if($j >= $left  &&  $j <= $right){
               echo "$i";
         }else{
                 echo " ";
          }
        $j++;
    }

 echo "<br>";
 $left--;$right++;
 $i++;
}

?>