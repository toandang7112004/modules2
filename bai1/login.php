<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //
        $email = $_POST['email'];
        $passwork = $_POST['passwork'];
        //
        echo 'ten Email:'.$email;
        echo '<br>';
        echo 'mat khau la:'.$passwork;
        if($email == 'admin@gmail.com' && $passwork == '123') {
            header('location: admin.php');
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
<form action="login.php" method="post">
    <label for=""> Email </label>
    <input type="text" name="email" id="">
    <br>
    <label for=""> Passwork</label>
    <input type="passwork" name="passwork" id="">
    <br>
    <input type="submit" value="submit">
</form>
</body>
</html>
