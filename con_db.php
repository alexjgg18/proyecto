<?php
// Create connection
$conex = mysqli_connect("localhost","root", "", "registro");
// Check connection
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// mysqli_close($conex);
?>