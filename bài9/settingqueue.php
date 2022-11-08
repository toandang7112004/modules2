<?php
class Node {
    protected $value = [];
    protected $next;
    public function __construct($next){
        $this-> next = $next;
    }
}
class Queue extends Node {
    protected $front;
    protected $back;  
    public function isEmpty(){
        if (count($this->value)==0){
            return true;
        }else{
            return false;
        }
}
    public function enqueue($item){
        array_push($this->value,$item);      
    }
    public function dequeue(){
        array_shift($this->value);
    }
}
$obiQueue = new Queue (3);
//thêm 3 phần tử
$obiQueue->enqueue('toan1');
$obiQueue->enqueue('toan2');
$obiQueue->enqueue('toan3');
//lấy ra 2 phân tử
$obiQueue->dequeue();
$obiQueue->dequeue();
//Kiểm tra xem Queue có rỗng hay không
var_dump($obiQueue->isEmpty());
//Thêm 2 phần tử vào Queue
$obiQueue->enqueue('Toán');
$obiQueue->enqueue('Văn');
//lấy ra 3 phần tử từ queue
$obiQueue->dequeue();
$obiQueue->dequeue();
$obiQueue->dequeue();
//lấy ra 3 phần tử từ queue
echo '<br>';
var_dump($obiQueue->isEmpty());
echo '<pre>';
print_r($obiQueue);
echo '</pre>';