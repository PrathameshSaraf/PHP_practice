<?php
// Start the session and get the data
session_start();
session_unset();//Unset ur all session variable;
session_destroy();
echo "<br> You have been logged out";
?>