<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $radius = $_POST['radius'];
    $height = $_POST['height'];
    $color = $_POST['color'];
}
class Circle {
    public $radius =0 ;
    // public $color = '';

    // const Pi = 3.14;
    //phương thức khỏi tạo
    public function __construct($radius, $color, $height){
        $this->radius = $radius;
        $this->height = $height;
        $this->color = $color;
    }
    //setter
    public function setRadius($radius) {
        $this->radius = $radius;
    }
    public function setHeight($height) {
        $this->height = $height;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    //getter
    public function getColor() {
        return 'màu : '.$this->color;
    }
    public function getHeight(){
        return 'chiều cao : '.$this->height;
    }
    public function getRadius() {
        return 'bán kính : '.$this->radius;
    }
    public function getdientich(){
         return (pow($this->radius,2))*Pi();
    }

    public function __toString()
    {
        return $this->getdientich();
    }
}
class Cylinder extends Circle {
    // public $height;
    public function getVolume(){
        return 'thể tích là : ' .($this->getdientich() * $this->height);
    }
    public function __toString()
    {
        return $this->getVolume();
    }
}
$cylinder = new Cylinder($radius,$color,$height);
// echo $this->getVolume();
$cylinder ->setRadius($radius);
$cylinder ->setHeight($height);
$cylinder ->setColor($color);
echo $cylinder ->getRadius();
echo '<br>';
echo $cylinder ->getHeight();    
echo '<br>';
echo $cylinder ->getColor();
echo '<br>';
echo $cylinder ->__toString();
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
        radius :<input type="text" name="radius" id="">
        <br>
        color :<input type="text" name="color" id="">
        <br>
        height :<input type="text" name="height" id="">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>