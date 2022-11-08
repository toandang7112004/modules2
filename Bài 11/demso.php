<?php
$numbers = [3,3,3,3,6,5,6,8,9,5];
$value = 3;
$count = 0;
foreach ($numbers as $key =>$values){
    if($value == $numbers[$key]){
        $count++;
    }
}
echo $count;