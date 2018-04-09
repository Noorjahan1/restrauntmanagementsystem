<?php 
  include('common/html_header.php');
   include('connection/config.php');

     $sql="SELECT * FROM foodcategory" ;//WHERE is_delete='0' ORDER BY name";
    
    /*if(isset($_GET['page'])){
      echo $_GET['page'];
      $num = ($_GET['page']-1)*3;
      echo $sql_2 = "SELECT * FROM foodcategory WHERE is_delete='0' ORDER BY name LIMIT 3 OFFSET $num";
    }
     */
        $result=mysqli_query($conn,$sql);

         


?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('common/header.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
if (isset($_GET['result'])&& $_GET['result']=='success'){
  echo "<div class='alert alert-success'>Data has been submitted</div>";
}

?>

      <form class="form-horizontal" action="foodexec.php?id=<?php if(isset($_GET['ID']))echo$_GET['id'];else{echo"0";}?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name"  placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="location">price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="price"  placeholder="price">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="location">description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="des"  placeholder="description">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Photo:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="email" name='photo' placeholder="Photo">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">CATEgory:</label>
    <div class="col-sm-10">
      
      <select name='cat'><option value="0">SELECT</option>
        <?php while($row=mysqli_fetch_assoc($result)){?>
      <option value="<?php echo $row['fcid']?>"><?php echo $row['category'] ?></option>
      <?php } ?>
      </select>
      
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" style="background-color:aqua;color: white; padding: 10px;border-radius:45px;">Submit</button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="reset" class="btn btn-default" style="background-color:aqua;color: white; padding: 10px;border-radius:45px;">Reset</button>
    </div>
  </div>
</form> 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  
<?php 
  include('common/html_footer.php');
?>