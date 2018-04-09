<?php
session_start();
include('connection/config.php');
$username = $_POST['name'];
$password = $_POST['pass'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 0){
	header('Location: login.php?result=err');
}else{
	$row = mysqli_fetch_assoc($result);
	$_SESSION['name'] = $row['username'];
	header('Location: index.php');
}
?>