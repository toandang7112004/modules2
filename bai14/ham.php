<?php
//1>Chuyen chuoi Toi,yeu,lap,trinh sang mang
$str = 'Toi,yeu,lap,trinh';
echo '<pre>';
print_r(explode(',',$str));
echo '</pre>';
//2>  Chuyen mang ['Toi','yeu','lap',trinh] sang chuoi Toi yeu lap trinh
$chuoi1 = ['Toi','yeu','lap','trinh'];
echo join (" ",$chuoi1); 
echo '<br>';
//3>Tu chuoi Toi yeu lap trinh thay the bang Toi yeu CodeGym
$chuoi2 = 'Toi yeu lap trinh';
echo str_replace('lap trinh' , 'CodeGym' ,$chuoi2);
echo '<br>';
//4>Tu chuoi Toi yeu CodeGym, kiem tra ky tu CodeGym co nam trong chuoi hay khong ?
$chuoi3 = 'Toi yeu CodeGym';
echo strpos($chuoi3, "CodeGym");