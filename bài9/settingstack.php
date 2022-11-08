<?php
const STACK_IS_FULL = 'stack is full';
const STACK_IS_EMPTY = 'stack is empty';
class Stack {
    private $stack = [];
    private $limit;
    public function __construct($limit){
        $this->limit =$limit;
    }
    public function push($item){
        array_unshift($this->stack,$item);
    }
    public function pop(){
       if($this->isEmpty()){
        echo STACK_IS_FULL;
       }else{
        array_shift($this->stack);
    }
    }
    public function top1(){
        if($this->isEmpty()){
            echo STACK_IS_EMPTY;
        }else{
            for($i = 0 ; $i < 3 ; $i++){
            echo ($this->stack[$i]);
        }
        }
    }
    public function top2(){
        if($this->isEmpty()){
            echo STACK_IS_EMPTY;
        }else{
            for($i = 0 ; $i < count($this->stack) ; $i++){
            echo ($this->stack[$i]);
        }
        }
    }
    //ktr xem stack có rỗng hay không
    public function isEmpty(){
        if(empty($this->stack)){
            return true;
        }else{
            return false;
        }
    }
    public function getStack(){
        return $this->stack;    
    }
}
$stack = new Stack(5);
$stack->push('toan1');
$stack->push('toan2');
$stack->push('toan3');
$stack->push('toan4');
$stack->push('toan5');
//lấy ra lần lượt  3 phần tử
$stack->top1();
$stack->pop();
$stack->pop();
$stack->pop();
// thêm 2 phần tử mới
$stack->push('toan5');
$stack->push('toan5');
echo '<br>';
//ktr  xem stack có rỗng hay k
var_dump($stack->isEmpty());
//lấy ra 4 phần tử
echo '<br>';
$stack->top2();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
echo '<br>';
//ktr  xem stack có rỗng hay k
var_dump($stack->isEmpty());
echo '<pre>';
print_r($stack);
echo '</pre>';