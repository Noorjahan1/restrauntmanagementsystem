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
      <form class="form-horizontal" action="new.php" method="post">
        <div class="form-group">
    <label class="control-label col-sm-2" for="name">current password </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cpassword"  placeholder="current password ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="location">new password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="npassword"  placeholder="new password ">
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
</div>
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
