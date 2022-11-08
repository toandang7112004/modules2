<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $class = $_POST['account'];
    $pattern = '/[CAP][0-9]{4,4}[GHIKLM]/';
    if(preg_match($pattern,$class) ){
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
        <input type="text" name="account" id="">
        <input type="submit" value="nhập">
    </form>
</body>
</html>