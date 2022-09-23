<?php
// $a=readfile('myfile.txt');
// echo $a;

$fptr=fopen('myfile.txt','r');

$content=fread($fptr,8);
echo $content;

fclose($fptr);
?>