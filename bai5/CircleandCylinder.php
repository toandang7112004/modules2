<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $radius = $_POST['radius'];
    $height = $_POST['height'];
    $color = $_POST['color'];
    class Shape
    {
        public  $name;
        public function __construct( $name)
        {
            $this->name = $name;
        }
        public function show()
        {
            return "I am a shape. My name is $this->name";
        }
}
    class Circle extends Shape
    {
        public $radius;

        public function __construct($name, $radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea()
        {
            return pi() * pow($this->radius, 2);
        }

        public function calculatePerimeter()
        {
            return pi() * $this->radius * 2;
        }
}
    class Cylinder extends Circle
    {
        public  $height;

        public function __construct( $name, $radius,  $height)
        {
            parent::__construct($name, $radius);
            $this->height = $height;
        }

        public function calculateArea(): int|float
        {
            return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
        }

        public function calculateVolume()
        {
            return parent::calculateArea() * $this->height;
        }
}
$cylinder = new Cylinder($radius,$color,$height);
echo $this->calculateArea();
echo $this->calculateVolume();
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