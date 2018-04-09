<?php
include('connection/config.php');
$cid = $_GET['id'];





	$sql = "DELETE from foodmenu  WHERE fid=$cid";
	mysqli_query($conn, $sql);
	header('Location: view_food.php');
?>