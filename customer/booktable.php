<?php
include('../admin/connection/config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
//$the_time = date('h:i A', strtotime($time));
$phone=$_POST['phone'];
$npeop=$_POST['people'];
$mes=$_POST['message'];
 $sql="INSERT INTO booktable (cname,resday,restime,cphone,npeop,mess,email) VALUES ('$name','$date','$time','$phone',$npeop,'$mes','$email');";
 mysqli_query($conn,$sql);
 header('location: index.php');




?>