<?php
// class Node{ 
//     /* dữu liệu nút */ 
//     public $data;  
//    /* liên kết đến nút tiêp theo */ 
//     public $next; 
//     function __construct($data){   
//         $this->data = $data;     
//         $this->next = NULL;   
//     }    
//     function readNode(){  
//        return $this->data;    
//     }
// }
// class LinkList{ 
//    /* Liên kết note đầu tiên trong ds */ 
//    private $firstNode;   
//    /* liên kết note cuối cùng trong ds */ 
//    private $lastNode;   
//    /* tổng số nút trong ds */
//     private $count;    
//     function __construct(){   
//         $this->firstNode = NULL; 
//         $this->lastNode = NULL;   
//         $this->count = 0;    
//     }
//     public function insertFirst($data){ 
//         $link = new Node($data); 
//         $link->next = $this->firstNode;
//         $this->firstNode = $link;  
//     /*If this is the first node inserted in the list then set the lastNode pointer to it.*/ 
//     if($this->lastNode == NULL){
//         $this->lastNode = $link;   
//         $this->count++;
//     }  
// }
// }