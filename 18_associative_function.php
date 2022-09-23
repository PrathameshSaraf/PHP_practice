<?php
echo "welcome to associative Arrays <br>";
$favcol=array('shubham'=>'red','saraf'=>'blue','ajinkya'=>'black');
echo $favcol["saraf"];
echo "<br>";
echo $favcol["ajinkya"];


//for loop for associative arrays
foreach ($favcol as $key => $value) {
    echo "<br> favorite color of $key is  $value";
}
?>