<?php
//ktr nguoi dung gui du lieu hay chua
    if($_SERVER['REQUEST_METHOD']=='POST'){
//hien thi thong tin
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
//khai bao
    $mail = $_POST['email'];
    $pass = $_POST['passwork'];
// xuat ra
    echo 'ten dang nhap :'.$mail;
    echo '<br>';
    echo 'mat khau la:'.$pass;
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
        Email <input type="text" name="email" id=""> <br>
        Password <input type="password" name="passwork" id=""> <br>
        <input type="submit" value="đăng nhập">
    </form>
</body>
</html>