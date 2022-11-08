<?php
$q = new SplStack();
$q->push('toan');
$q->push('truong');
$q->push('ngoc');
//đưa con trỏ về lại vị trí ban đầu
$q->rewind();
// 
// while($q->valid()) {
//     echo $q->current();
//     $q->next();
// }


echo '<pre>';
print_r($q);
echo '</pre>';













// var_dump($q->valid());
// echo '<br>'.$q->current();
// $q->next(); // di chuyển con trỏ đến trường



// var_dump($q->valid());
// echo '<br>'.$q->current();
// $q->next(); // di chuyển con trỏ đến ngọc


// var_dump($q->valid());
// echo '<br>'.$q->current();
// $q->next(); // di chuyển con trỏ tới 1 bước



// var_dump($q->valid());
// echo '<br>'.$q->current();
// $q->next();
