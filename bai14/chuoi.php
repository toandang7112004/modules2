<?php
//=12 ktr độ dài trong chuỗi
echo strlen('hello world!');
echo '<br>';
//=3 ktr số từ trong chuỗi
echo str_word_count('hello world you');
echo '<br>';
// đảo ngược chuỗi
echo strrev('hello ');
echo '<br>';
//strpos($string, $text): hàm tìm kiếm chuỗi $text trong chuỗi $string
echo strpos("Hello world!", "world");//6
echo '<br>';
/*str_replace($find, $replace, $string): 
hàm tìm kiếm chuỗi $find, thay thế chuỗi đó bằng $replace trong chuỗi ban đầu $string*/
echo str_replace('how' , 'you' , 'how are you');//you are you
echo '<br>';
/*substr($string, $start, $length): 
Hàm này có tác dụng cắt chuỗi $string, 
bắt đầu ở vị trí $strat và có giới hạn $length*/
echo substr('nice to meet you' , 3 , 10 );
echo '<br>';
/*strtolower($string): Hàm có tác dụng chuyển chuỗi $string sang chữ thường.*/
echo strtolower('dangtoan');
echo '<br>';
/*strtoupper($string): Hàm có tác dụng chuyển đổi chuỗi $string sang chữ hoa*/
echo strtoupper('dangtoan');//DANGTOAN