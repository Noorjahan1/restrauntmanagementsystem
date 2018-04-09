<?php
include('connection/config.php');
$cid = $_GET['id'];





	$sql = "DELETE from foodcategory  WHERE fcid=$cid";
	mysqli_query($conn, $sql);
	header('Location: foodcat.php');
?>