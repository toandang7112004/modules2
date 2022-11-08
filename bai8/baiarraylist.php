<?php
class MyList {
    protected $size = 0;
    protected $elements = [];
    //chèn
    public function insert($index,$item){
        array_splice($this->elements,$index,0,$item);
    }
    //thêm phần tử
    public function add($item){
        array_push($this->elements,$item);
    }
    //xóa phần tử
    public function remove($index){
        array_splice($this->elements,$index,1);
    }
    //lấy 
    public function get($index){
        return $this->elements[$index];   
    }
    //xóa mảng
    public function clear(){
        return $this->elements=[];
    }
    public function addAll($arr){
        foreach($arr as $item =>$value){
            $this->add($this->elements[$value]);
        }
    }
    //trả về key của 1 value
    public function indexOf($item){
        return array_search($item,$this->elements);
    }
    //ktr rỗng hay không
    public function isEmpty(){
        if(count($this->elements) > 0 ){
            return 'false';
        }else{
            return 'true';
        }
    }
    public function sort(){}
    public function reset(){
        return reset($this->elements);
    }
    //trả về độ dài của mảng
    public function size(){
        return count($this->elements);
    }
}
$obj = new MyList();
$obj->add('A');
$obj->add('B');
$obj->add('C');
$obj->add('D');
$obj->add('E');
$obj->insert(2,'?');//chèn ? vào chỉ số 2
$obj->remove(3);//xóa C
echo $obj->get(2);//?
echo '<br>';
echo $obj->size();//5
echo '<br>';
echo $obj->isEmpty();//false
echo '<br>'; 
echo $obj->indexOf('E');//trả về key của 1 value
// $obj->clear();//xóa mảng
echo '<br>'; 
echo $obj->reset();
echo '<br>'; 
$obj->addAll([0,1,2,3,4]);
//in 
echo'<pre>';
print_r($obj);
echo'</pre>';