<?php
$number = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
for ($i = 0; $i < count($number); $i++){
    for ($k = count($number)-1 ; $k > 0; $k--){
        if($number[$k] < $number[$k-1]){
            //hoán đổi
            $temp = $number[$k-1];  //44
            $number[$k-1] = $number[$k]; //8
            $number[$k] = $temp; //44
        }
    }
}
echo '<pre>';
print_r($number);
echo '</pre>';
?>