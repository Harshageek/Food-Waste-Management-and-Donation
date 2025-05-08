<?php
$connection = mysqli_connect("localhost", "root", "", "demo"); 

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
