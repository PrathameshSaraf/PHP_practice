<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}
$sql = "DELETE  FROM `phptrip` WHERE `dest`='india'";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been Deleted successfully successfully!<br>";
}
else{
    echo "The record was not Deleted successfully because of this error ---> ". mysqli_error($conn);
}

?>