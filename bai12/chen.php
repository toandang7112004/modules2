<?php
$A = [8 , 6 , 34 , 22 ,40 , 5 , 11 ,23 , 44 , 18];
$n = count($A);
for($i = 1 ; $i < $n ; $i++){
    $j = $i - 1 ;//0 
    $t = $A[$i];//6 
    while($t < $A[$j] && $j >=0){
        $A[$j+1]=$A[$j];
        $j--;
    }
    $A[$j+1] = $t;
}
echo '<pre>';
print_r($A);
