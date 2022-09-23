<?php
// $a=readfile('myfile.txt');
// echo $a;

$fptr=fopen('myfiled.txt','r');
 
// echo var_dump($fptr);
if(!$fptr){
    echo "hello";
}
?>