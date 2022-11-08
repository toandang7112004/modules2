<?php
class Node{
    public $data = '';
    public $next = null;
    public function __construct($data){
        $this->data = $data;
    }
}
class LinkedList{
    public $head = null;
    public function addFisrt($item){
        $node = new Node($item);
        //thêm vào đầu 
        if($this->head == null){
            $this->head = $node;
        }else{
            // $this->head->next=$node;
            $currentNode = $this->head;
            while($currentNode ->next != null){
                $currentNode = $currentNode ->next;
            }
            $currentNode->next = $node;
        }
    }
}
$objLinkedList = new LinkedList();
$objLinkedList -> addFisrt('Toàn');
$objLinkedList -> addFisrt('Trường');
$objLinkedList -> addFisrt('ngọc');
echo '<pre>';
print_r($objLinkedList);
echo '</pre>';