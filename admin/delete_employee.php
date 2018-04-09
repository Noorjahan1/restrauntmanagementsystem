<?php
include('connection/config.php');
$cid = $_GET['id'];





	$sql = "DELETE from employee  WHERE eid=$cid";
	mysqli_query($conn, $sql);
	header('Location: view_employee.php');
?>