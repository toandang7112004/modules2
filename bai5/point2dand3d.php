<?php
class Point2D{
    public $x = 0;
    public $y = 0;
    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($ts_x){
        $this->x = $ts_x;
    }
    public function setY($ts_y){
        $this->y = $ts_y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function setXY($ts_x,$ts_y) {
        return $this->setXY($ts_x,$ts_y);
    }
    public function getXY(){
        return array($this->x,$this->y);
    }
}
class Point3D extends Point2D{
    public function __construct($x, $y, $z){
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setXYZ($ts_x,$ts_y,$ts_z){
        parent::setXY($ts_x,$ts_y);
        $this->z = $ts_z;
    }
}
?>