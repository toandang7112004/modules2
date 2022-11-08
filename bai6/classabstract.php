<?php
abstract class Toanhoc{
    abstract function TinhToan();
}
abstract class HinhHoc extends Toanhoc{
    // abstract function TinhToan();
    abstract function tinhChuVi ();
    abstract function tinhDienTich ();
}
class Hinhvuong extends HinhHoc{
    function TinhToan(){}
    function tinhChuVi (){}
    function tinhDienTich (){}
}
abstract class Human{
    abstract function  say();
}
//interface
interface Bird {
     function fly();
}
interface Fish{
     function swiming();
}
//triển khai interaface
class SupperMan extends Human implements Bird,Fish{
    public function say(){
        
    }
    public function fly(){

    }
    public function swiming(){

    }
}

