<?php  
   session_start();

  if(!isset($_SESSION['id'])){
  header('Location: index.php#about');
 }else{
 	include('../admin/connection/config.php');
 	  $foid=$_GET['fid'];
 	   $cuid=$_SESSION['id'];
 	   $qua=$_POST['quan'];

 	 $sql="INSERT INTO cart(cid,quantity,fid,totalprice) VALUES($cuid,$qua,$foid,$qua*(SELECT price FROM foodmenu WHERE fid=$foid))";
 	 mysqli_query($conn,$sql);
     header('location: index.php#menu-list');

 }