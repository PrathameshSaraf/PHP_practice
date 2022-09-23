<?php
$name='saraf';
$income=900000;

/*
Data types in php 
1.String-:sequence of charater 
2.Integer
3.Float
4.object
5.boolean
6.array
7.Null
*/
//string operation
$first_name='prathamesh';
$last_name='saraf';
echo "$first_name $last_name\n";
echo "<br>";

//integer 
$income=5000000;
$loan=40000;
echo $loan;
echo "<br>";
echo "$income "+$loan;
echo "<br>";
echo $income-$loan;

//Float-:
$income=5000.54;
$loan=400.54;
echo "<br>";
echo $income;
echo "<br>";
echo $loan;

//boolean
$x=true;
$is_friend=false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

//Array
$array=array("mandar","ajinkya","suraj","aditya");
echo var_dump($array);
echo "<br>";
echo $array[1];
echo "<br>";
echo $array[2];
echo "<br>";
echo $array[3];
echo "<br>";

//null
$a=null;
echo var_dump($a);






?>