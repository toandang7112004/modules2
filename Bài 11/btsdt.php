<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sdt = $_POST['sdt'];
    $phones = explode(',',$sdt);
foreach ( $phones as $value){
    $checkphone = substr($value,0,3);
    if($checkphone == '081' || $checkphone == '082' || $checkphone == '083'){
        $Vinaphone = $value;
        if(strlen($Vinaphone) ==10){
        echo "số mạng Vinaphone : " ;
        echo ($Vinaphone);
        }else{
            echo 'bạn chưa nhập đúng sđt';
        }
    }
    if($checkphone == '072' || $checkphone == '098' || $checkphone == '073' || $checkphone == '077'){
        $Mobifone = $value;
        if(strlen($Mobiphone)==10){
        echo "số mạng Mobifone : ";
        echo ($Mobifone);
        }else{
            echo 'bạn chưa nhập đúng sđt';
        }
    }
    if($checkphone == '033' ||$checkphone == '034'||$checkphone == '035'||$checkphone == '036'){
        $Viettel = $value;
        if(strlen($Viettel) == 10){
        echo "số mạng Viettel : " ;
        echo ($Viettel);
        }else{
            echo 'bạn chưa nhập đúng sđt' ;
        }
    }
}
}
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
        SĐT <input type="text" name="sdt" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>
