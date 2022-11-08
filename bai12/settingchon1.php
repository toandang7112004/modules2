<?php
 $number = [1, 9, 4.5, 6.6, 5.7, -4.5];
for($i = 0 ; $i <count($number) ; $i++){
    $min = $i;
    for($k = $i+1 ; $k < count($number) ; $k++){
        if($number[$min] > $number[$k]){
            $min = $k;
        }
    }
    $temp = $number[$min];
    $number[$min] = $number[$i];
    $number[$i] = $temp; 
}
echo '<pre>';
print_r($number);
