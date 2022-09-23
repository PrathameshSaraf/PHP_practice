<?php
echo "Function tutorial <br> ";
function processMarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum+=$value;
    }
    return $sum; 
}

$sarafMark=[34,98,45,12,98,93];
$summark=processMarks($sarafMark);

echo "total marks  scored by rohan out of 600 $summark";


?>