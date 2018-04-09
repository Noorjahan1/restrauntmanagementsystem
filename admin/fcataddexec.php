<?php
include('connection/config.php');
 $newcategory=$_POST['name'];
 $id=$_GET['id'];
if (isset($_GET['act'])&&$_GET['act']=='Update') {
   
   $id=$_GET['id'];
  
 $sql= "UPDATE foodcategory SET category='$newcategory' WHERE fcid=$id";
  
}else if(isset($_GET['act'])&&$_GET['act']=='Add'){
	 $sql= "INSERT INTO  foodcategory (category) VALUES ('$newcategory')";
}
 mysqli_query($conn,$sql);
header('location: foodcat.php');
?>