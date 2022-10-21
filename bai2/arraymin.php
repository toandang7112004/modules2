<?php
$arr = [4,1,3,6,1,9];
$min = $arr[0];
foreach (array_slice($arr,3) as $key => $value){
    if($arr[$key] < $min){
        $min = $arr[$key];
    };
};
echo '<pre>';
print_r($min);
echo '</pre>';