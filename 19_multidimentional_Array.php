<?php 
echo "welcome to multidimentional Array<br>";
//MultiDimentional Array 

$multiDim=array(
    array(2,4,5,6),
    array(0,7,8,9),
    array(3,1,10,11)
);


for ($i=0; $i<count($multiDim) ; $i++) {
     for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
     }
     echo "<br>";
}


$multiDim3=array(
    array(array(0,7,8,9),array(3,1,10,11),array(3,1,10,11)),
    array(array(11,12,13,14),array(15,16,17,18)),
    array(array(21,22,23,24),array(25,26,27,28)),
    
    
);
//Three Dimention Array
for ($i=0; $i<count($multiDim3) ; $i++) {
    for ($j=0; $j <count($multiDim3[$i]) ; $j++) { 
        for ($k=0; $k <count($multiDim3[$i][$j]) ; $k++) { 
          echo $multiDim3[$i][$j][$k];
           echo " ";
    }
    echo "<br>";
}
echo "<br>";
}
?>