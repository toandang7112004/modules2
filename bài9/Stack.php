<?php
interface Stack{
    public function push($item);
    public function pop();
    public function top();
    public function isEmpty();
}
class Book implements Stack{
    public  $stack;
    public  $limit;
    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push($item){
        if(count($this->stack) > $this->limit ){
            throw new Exception("stack full");
        }else{
            array_push($this->stack,$item);
        }
    }
    public function pop(){
        if($this->isEmpty()){
            throw new Exception("stack empty");
        }else{
            return array_pop($this->stack);
        }
    }
    public function top(){
        return end($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function getStack(){
        return $this->stack;
    }
}
$stack = new Book(3);
$stack->push('hoàng');
$stack->push('đăng');
$stack->push('toàn');
$stack->push('toàn');
$stack->pop();
echo $stack->top();
echo '<pre>';
print_r($stack);
echo '</pre>';