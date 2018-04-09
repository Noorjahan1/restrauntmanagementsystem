<?php
session_start();
include('../admin/connection/config.php');
$username = $_POST['email'];
$password = md5($_POST['pass']);

$sql = "SELECT * FROM customer WHERE email='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 0){
	header('Location: login.php?result=err');
}else{
	$row = mysqli_fetch_assoc($result);
	$_SESSION['id'] = $row['cid'];
	header('Location: index.php#menu-list');
}
?>