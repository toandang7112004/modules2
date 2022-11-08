<?php
//container
class Arraylist{
    //elements
    protected $elements =[];
    //thêm 1 phần tử 
    public function add($item){
        array_push($this->elements,$item);
    }
    //lấy 1 phần tử
    public function get($index){
        return $this->elements[$index];
    }
    //xóa 1 phần tử
    public function remove($index){
        array_splice($this->elements, $index, 1);
    }
    //số lượng phần tử
    public function size(){
        return count($this->elements);
    }
    //tìm kiếm phần tử
    public function find($value){
        return array_search($value,$this->elements);
    }
    //ktr rỗng
    public function isEmpty(){
        if(count($this->elements) > 0 ){
            return 'false';
        }else{
            return 'true';
        }
    }
}
//in add
$obj = new Arraylist();
$obj->add('toàn');
$obj->add('trường');
$obj->add('ngọc');
$obj->remove(1);

// echo $obj->size();

// echo $obj->find('ngọc');

// echo $obj->isEmpty();

//in ra mảng
echo '<pre>';
print_r($obj);
echo '</pre>';
// $books = ['van','su','dia'];
// echo $books[1];