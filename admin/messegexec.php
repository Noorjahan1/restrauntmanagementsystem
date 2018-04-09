<?php
include('connection/config.php');
if($_GET['action']=='messege'){
  $id=$_GET['id'];
  $message=$_POST['mes'];
  $sql="INSERT INTO message(message,cid) VALUES('$message',$id)";
  mysqli_query($conn,$sql);
 
}else if($_GET['action']=='delete'){
   $id=$_GET['id'];
 $sql="DELETE FROM customer WHERE cid=$id";
  mysqli_query($conn,$sql);
 

}
 header('location: view_customer.php?result=successful');


?>
