<?php
$string1="i am a very good boy 1";
echo $string1;
echo "<br>";
echo strlen($string1);
echo "<br>";
echo str_word_count($string1);
echo "<br>";
echo "reverse string is ". strrev($string1);
echo "<br>";
echo strpos($string1 ,"a");
echo "<br>"; 
echo str_replace("good","bad",$string1);
echo "<br>";
echo str_repeat($string1,5);
echo "<br>";

?>