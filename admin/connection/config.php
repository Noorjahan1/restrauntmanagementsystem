<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost", $username, $password,"restraunt");

// Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
?>