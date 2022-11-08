<?php
$books = ['van','su','dia'];
$temp = $books[1];
$books[1] = $books[2];
$books[2] = $temp;
print_r($books);