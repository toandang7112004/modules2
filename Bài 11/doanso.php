<?php
$arr = [];
for($i = 1 ; $i<=100;$i++){
    array_push($arr,$i);
}
// print_r($arr);
$find = 14;
$L = 0 ;
// $R = count($arr)-1;
// // $M = floor(($L + $R) / 2) ;
//     if($M > $find ){
//         $R = $M - 1;
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Số cần tìm <input type="submit" value="cantim">
        <br>
        Số cần tìm nhỏ hơn<input type="submit" value="min">
        <br>
        Số cần tìm lớn hơn<input type="submit" value="max">
    </form>
</body>
</html>
