<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Santa's Blackmarket Test Home-page 0.0</title>
    :
    <link type="text/css" rel="stylesheet" href="405projectStyling.css" />
</head>


<body>

    <div class="centeredHeader">

        <p>Welcome to the Toy Store</p>
        <p id="HeaderText   ">Register</p>
        <p id="HeaderText   ">Log-In</p>
        <p id="HeaderText   ">Shop</p>
        <p id="HeaderText   ">Checkout</p>

    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<form method="post" action="toSQL.php">
    Name: <input type="text" name="username">
    ID: <input type="text" name="id">
    <input type="submit" value="click" name="submit"> 
</form>
<br>
</body>
</html>






<?php
// Create connection
$link = mysqli_connect('127.0.0.1','subroot','password','sqltest');
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully to our toy database <br>";






if (mysqli_query($link, "CREATE TEMPORARY TABLE myToys LIKE toys") === TRUE) {
    printf("Temporary table toys successfully created.<br>");
}



$namesOfToys = mysqli_query($link, "SELECT name FROM toys");

echo "The toy names in our toys table are: <br>";
while($row = mysqli_fetch_array($namesOfToys)) {
  echo $row['name'];
  echo "<br>";
}


$toyIds = mysqli_query($link, "SELECT id FROM toys");

echo "The toy ids in our toys table are: <br>";
while($row = mysqli_fetch_array($toyIds)) {
  echo $row['id'];
  echo "<br>";
}



mysqli_close($link);
?>