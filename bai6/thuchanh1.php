<?php

class Circle{
    public $radius;
    public $name;
    public function __construct($ts_radius,$ts_name){
        $this->radius = $ts_radius;
        $this->name = $ts_name;
    }
    //setter
    public function setRadius($ts_radius){
        $this->radius = $ts_radius;
    }
    public function setName($ts_name){
        $this->name = $ts_name;
    }
    //getter
    public function getRadius(){
        return $this->radius;
    }
    public function getName(){
        return $this->name;
    }
}
class ComparableCircle extends Circle {
    public function compareTo($objTwo)
    {
        $circleTwoRadius = $objTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
$circleOne = new ComparableCircle(8,'circleOne');
$circleTwo = new ComparableCircle(8,'circleTwo');
// $circleThree = new ComparableCircle(4,'circleThree'); 
$test = $circleOne->compareTo($circleTwo);
echo('Comparable: <br>');
echo $test;