<?php
include('connection/config.php');
  $c=$_POST['cpassword'];
  $n=$_POST['npassword'];
  echo $sql="UPDATE admin SET password='$n' WHERE password='$c'";
 mysqli_query($conn,$sql);
 header('location: changepass.php');


?>