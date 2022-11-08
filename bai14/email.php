<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $pattern = '/^[A-Za-z0-9]+\@[a-z]+\.[a-z]{3,3}/';
    if(preg_match($pattern,$email) ){
        echo 'thành công';
    }else{
        echo 'k thành công';
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
        <input type="text" name="email" id="">
        <input type="submit" value="nhập">
    </form>
</body>
</html>