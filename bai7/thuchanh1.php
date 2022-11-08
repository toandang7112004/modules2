<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number = $_POST['number'];

class FizzBuzz
{
    public $status;
    public function __construct($number)
    {
        //tách biến
        $isFizz = $number % 3 ==0;
        $isBuzz = $number % 5 ==0;
        if ( $isFizz && $isBuzz ) {
            $this->status = "FizzBuzz";
        } elseif ($isFizz) {
            $this->status = "Fizz";
        } elseif ($isBuzz) {
            $this->status = "Buzz";
        } else {
            $this->status = $number ;
        }
    }
    public function __toString()
    {
        return $this->status;
    }
}
$fizzBuzz = new FizzBuzz($number);
echo $fizzBuzz;
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
        number<input type="text" name="number" id="">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
