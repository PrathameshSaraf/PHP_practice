<?php

$fptr=fopen('myfile.txt','r');
// while($a=fgets($fptr)){
//     echo $a;
// }

// echo "<br>end file<br>";


while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);
echo "<br>End of the file has been reached";
?>