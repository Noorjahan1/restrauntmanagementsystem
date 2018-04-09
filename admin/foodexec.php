<?php

include ('connection/config.php');

  $name =$_POST['name'];
  $fc=$_POST['cat'];
 $description = $_POST['des'];
 $price = $_POST['price'];
 //$category =$_POST['category'];
 $photo = $_FILES['photo']['name'];
 $target = "../images/"; 
 $target = $target.$_FILES['photo']['name']; 
 //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 if($_GET['id']=="0"){
  $sql = "INSERT INTO foodmenu(name,price,des,pic,fcid ) VALUES('$name','$price','$description','$photo',$fc)";
}else{
    $id=$_GET['id'];
    $sql="UPDATE foodmenu SET name='$name', price=$price, des= '$description',pic='$photo' WHERE fid=$id";
}

mysqli_query($conn,$sql);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target);

header("Location: view_food.php?result=success");
?>
  

