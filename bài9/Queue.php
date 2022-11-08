<?php
const QUEUE_IS_FULL = 'queue is full';
const QUEUE_IS_EMPTY = 'queue is empty';
class Queue{
    private $elements = [];
    private $limit;
    public function __construct($limit){
        $this->limit = $limit;
    }
    public function enqueue($item){
        if($this->isFull()){
            echo QUEUE_IS_FULL;
        }else{
            array_push($this->elements,$item);
        }
    }   
    public function dequeue(){
        if($this->isEmpty()){
            echo QUEUE_IS_EMPTY;
        }else{
            array_shift($this->elements);
        }
    }
    public function peek(){
        if($this->isFull()){
            echo QUEUE_IS_FULL;
        }else{
            reset($this->elements);
        }
    }
    public function isFull(){
        if(count($this->elements) == $this->limit){
            return true;
        }else{
            return false;
        }
    }
    public function isEmpty(){
        return empty($this->elements);
    }
}
$queue = new Queue(5);
$queue->enqueue('toàn');
$queue->enqueue('toàn1');
$queue->enqueue('toàn2');
$queue->enqueue('toàn3');
$queue->enqueue('toàn4');
$queue->enqueue('toàn5');
$queue->enqueue('toàn6');
echo '<pre>';
print_r($queue);    
echo '</pre>';