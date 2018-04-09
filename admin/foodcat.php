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
    
      <table class="table"> 
        <tr>
        
        <th>Category</th>
        <th>Action</th>
        
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($result)){
          ?>

        <tr>
        
        <td><?php echo strtolower($row['category']); ?></td>

    <td><a href="delet_cat.php?id=<?php echo $row['fcid']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
       
    <td><a href="fcatadd.php?fcid=<?php echo$row['fcid'];?>&action=Update&cname=<?php echo $row['category'];?>" class="btn btn-danger">Update</a></td>
     
        </tr>


        <?php
        } 
        ?>

      </table>
      <a href="fcatadd.php?fcid=<?php echo$row['fcid'];?>&action=Add&cname=''" class="btn btn-danger">Add</a>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<?php 
  include('common/html_footer.php');
?>