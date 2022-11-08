<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $radius = $_POST['radius'];
    $height = $_POST['height'];
class Cylinder
{
    public function getVolume($radius, $height)
    {
        $Area = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        return $perimeter * $height + 2 * $Area;
    }
    public function getPerimeter($radius)
    {
        return pi() * $radius * $radius;
    }   
    public function getBaseArea($radius)
    {
        return 2 * pi() * $radius;
    }
}
$cylinder = new Cylinder($radius, $height);
echo $cylinder->getVolume();
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
        radius <input type="text" name="radius" id="">
        <br>
        height <input type="text" name="height" id="">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
