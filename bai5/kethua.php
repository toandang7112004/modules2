<?php
class cha{
    //thuoc tinh
    public $skincolor = 'yellow';
    public $carName = 'VF6';
    //phuong thuc
    public function xe_hoi(){
        echo '<br>' .$this->carName;
    }
    public function nha(){
        echo '<br> nha 3 tang';
    }
}
class chu{
    protected $money =1000000000000;
}
//ghi de phuong thuc
    class con extends cha{
        public function xe_hoi(){
            $this->nha();
            echo '<br>' .$this->carName .' Do len VF9';
        }
        public function nha(){
            echo '<br> nha 4 tang';
        }
}
//khoi tao doi tuong
$con_1 = new con();
$con_1->xe_hoi();
//truy cap thuoc tinh
echo '<pre>';
print_r($con_1);
die();