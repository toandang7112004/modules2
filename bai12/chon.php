<?php
$A = [8 , 6 , 34 , 22 ,40 , 5 , 11 ,23 , 44 , 18];
$n = count($A);
for( $i = 0 ; $i < $n ; $i++){
    $min = $i ;
    // $j =$i + 1;
    for($k = $i +1 ; $k < $n ; $k++){
        if($A[$k] < $A[$min]){
            $min = $k;
        }
    }
    //min = 5
    //doi cho
    $temp = $A[$min];
    $A[$min] = $A[$i];
    $A[$i] = $temp;
}
echo '<pre>';
print_r($A);