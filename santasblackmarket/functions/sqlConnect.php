<?php
// Create connection
$link = mysqli_connect('127.0.0.1','subroot','password','sqltest');
// Check connection
if (!$link) {
        die("Log-in failed: " . mysqli_connect_error());
}

?>