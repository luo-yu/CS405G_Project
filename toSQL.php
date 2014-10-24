<?php

$var1 = $_POST["username"];
$var2 = intval($_POST["id"]);

// Create connection
$link = mysqli_connect('127.0.0.1','subroot','password','sqltest');
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully to our toy database <br>";

$sql = "INSERT INTO toys (name, id)
VALUES ('$var1', '$var2')";

if ($link ->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();





function display()
{
    echo "<br>";
    echo "hello ".$_POST["username"];
    echo "<br>";		
    echo "hello ".$_POST["id"];
    echo "<br>";
}
if(isset($_POST['submit']))
{
   display();
} 
?>