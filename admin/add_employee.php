<?php 
  include('common/html_header.php');
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

      <form class="form-horizontal" action="process_employee.php" method="post">
        <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name"  placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="location">Location</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="loc"  placeholder="Enter location">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Phone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ph" placeholder="Enter Phone">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name='myemail' placeholder="Enter email">
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