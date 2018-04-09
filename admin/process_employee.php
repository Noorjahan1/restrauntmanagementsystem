<?php

include ('connection/config.php');
$name=$_POST['name'];
$email=$_POST['myemail'];
$loc=$_POST['loc'];
$phone=$_POST['ph'];

$sql="INSERT INTO employee(name,location,phone,email) VALUES('$name','$loc','$phone','$email');";

mysqli_query($conn,$sql);

header("Location:add_employee.php?result=success");
?>