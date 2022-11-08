<?php
/*
    \+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}
    preg_match
*/
$string= '+84.555.666.777';
$pattern = '/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if(preg_match($pattern,$string) ){
    echo 'sđt hợp lệ';
}else{
    echo 'sđt k hợp lệ';
}
/*

preg_match_all

*/
$subject = "Chào mừng bạn đến với CodeGym. CodeGym - Hệ thống đào tạo lập trình hiện đại.";
$pattern = '/CodeGym/';
print('<pre>');
preg_match_all($pattern, $subject, $matches);
print_r($matches);
print('</pre>');

/*
preg_split()
*/
$ip = '197.196.0.1';

$temp = (explode('.',$ip));

$iparr = preg_split ("/\./", $ip);
echo '<pre>';
print_r($iparr);
echo '</pre>';