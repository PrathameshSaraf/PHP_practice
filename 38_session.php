<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Saraf";
$_SESSION['favCat'] = "Mobile";
echo "We have saved your session";
?>