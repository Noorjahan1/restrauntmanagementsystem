<?php
include('connection/config.php');
$cid = $_GET['id'];





	$sql = "DELETE from  cart  WHERE cartid=$cid";
	mysqli_query($conn, $sql);
	header('Location: order.php');
?>