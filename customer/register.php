
<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost", $username, $password,"restraunt");

// Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$loc=$_POST['location'];
	$phone=$_POST['phone'];
	$pass=md5($_POST['pass']);
    $sql="INSERT INTO customer(name,email,location,phone,password)VALUES('$name','$email','$loc','$phone','$pass')";
    mysqli_query($conn,$sql);
    header('location: index.php? result=successfull');

}


?>
