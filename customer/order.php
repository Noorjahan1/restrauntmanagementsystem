<?php
session_start();
include('../admin/connection/config.php');
$cart=$_GET['id'];
$sql="INSERT INTO orders(fid,cid,cartid)SELECT fid,cid,cartid FROM cart WHERE cartid=$cart";
$sql2="DELETE FROM cart WHERE cartid=$cart";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql2);
header('location: index.php#message');


?>