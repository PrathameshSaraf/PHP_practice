<?php
include '_DBCONNECTION.php';
$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase<br>";
$no=1;
if($num> 0){  
    while($row = mysqli_fetch_assoc($result)){ 
        echo $no .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
        $no = $no +1;
    }
}

?>