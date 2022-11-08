<?php
//tách hằng
const ADDITION = '+';
const SUBTRACTION  = '-';
const MULTIPLICATION  = '*';
const DIVISION  = '/'; 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $firstOperand = $_POST['sothu1'];
        $operator = $_POST['pheptinh'];
        $secondOperand = $_POST['sothu2'];
class Calculator
{
    public function calculate($firstOperand , $secondOperand , $operator )
    {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;
                break;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
                break;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
                break;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by ";
                }
                break;
            default:
                return "Unsupported operation";
        }
    }
}
$calculator = new Calculator();
echo $calculator->calculate($firstOperand , $secondOperand , $operator );
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
        sothu1<input type="text" name="sothu1" id="">
        <br>
        phép tính : <select name="pheptinh" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        sothu2<input type="text" name="sothu2" id="">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>









