<?php
class StopWatch{
    public static $startTime = 0;
    public static $endTime = 0;
    public $color ='red';
    //getter
    public static function getStartTime(){
        //this k di kem static
        echo __METHOD__;
    }
    public static function getEndTime(){
        echo self::$endTime;
    }
};
//goi thuoc tinh
echo Stopwatch::$startTime;
echo'<br>';
echo Stopwatch::$endTime;
//goi phuong thuc
 Stopwatch::getStartTime();
echo'<br>';
 Stopwatch::getEndTime();
