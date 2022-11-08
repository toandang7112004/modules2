<?php
    class MyStack{
        private $elements = [];
        private $limit;
        public function __construct($limit){
            $this->limit = $limit;
        }
        public function push($limit){
            if($this->isFull()){
                echo 'stack is full' ;
            }else{
                array_unshift($this->elements, $limit);
            }
        }
        public function pop(){
            if($this->isEmpty()){
                echo 'stack is empty' ;
            }else{
                return array_shift($this->elements);
            }
        }
        public function peek(){
            if($this->isEmpty()){
                echo 'stack is empty' ;
            }else{
                return reset($this->elements);
            }
        }
        public function isEmpty(){
            return empty($this->elements);
        }
        public function isFull(){
            if(count($this->elements) == $this->limit){
                return true;
            }else{
                return false;
            }
        }
    }
    $mystack= new MyStack(5);
    $mystack->push('toan1');
    $mystack->push('toan2');
    $mystack->push('toan3');
    $mystack->push('toan4');
    $mystack->push('toan5');
    $mystack->push('toan6');
    echo $mystack->peek();
    echo '<pre>';
    print_r($mystack);
    echo '</pre>';
