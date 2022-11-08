<?php
class Dancer{
    public $gender = ' ';
    public $name ;
    public function __construct($name,$gender){
        $this->name = $name;
        $this->gender = $gender;
    }
}
$qNam = new SplQueue();
$qNam->enqueue(new Dancer('toàn',true));
$qNam->enqueue(new Dancer('trường',true));
$qNam->enqueue(new Dancer('ngọc',true));

$qNu = new SplQueue();
$qNu->enqueue(new Dancer('thảo tâm',false));
$qNu->enqueue(new Dancer('huyền',false));

$qNam ->rewind();
$qNu ->rewind();
$pairs = [];
$Namwaiting = [];
$Nuwaiting = [];
while ($qNam ->valid() || $qNu -> valid()){
    if($qNam ->valid() && $qNu -> valid()){
        $pairs[] = [
            'Name' =>$qNam ->current(),
            'Nu' =>$qNu ->current(),
        ];
        $qNam->next();
        $qNu->next();
    }elseif($qNam ->valid()){
        $Namwaiting[] = $qNam ->current();
        $qNam->next();     
    }elseif($qNu ->valid()){
        $Nuwaiting[] = $qNu ->current();
        $qNu->next();     
    }
}

echo '<pre>';
print_r($pairs);
print_r($Namwaiting);
print_r($Nuwaiting);
echo '</pre>';