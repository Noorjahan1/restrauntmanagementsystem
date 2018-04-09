<?php
include('connection/config.php');
$cid = $_GET['id'];





	$sql = "DELETE from booktable  WHERE resid=$cid";
	mysqli_query($conn, $sql);
	header('Location: booktable.php');
?>