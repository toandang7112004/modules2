<?php
$q = new SplQueue();
$q->push('toan');
$q->push('truong');
$q->push('ngoc');

$q->rewind();
//đưa con trỏ về lại vị trí ban đầu
while ($q -> valid()){
    echo '<br>'.$q->current();
    $q->next();
}
echo '<pre>';
print_r($q);
echo '</pre>';