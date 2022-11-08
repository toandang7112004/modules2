<?php
try {
    $a = 4 ;
    $b = 0 ;
    if($b == 0 ){
        throw new Exception("Error Processing Request", 1);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}