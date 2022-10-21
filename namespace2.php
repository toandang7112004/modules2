<?php
include 'Dongha/Tam.php';
include 'Giolinh/Tam.php';

use Dongha\Tam;
use Giolinh\Tam as TamGioLinh;
$tam =new Tam();
$tam1 = new TamGioLinh();
echo'<pre>';
print_r($tam);
print_r($tam1);    
echo'</pre>';