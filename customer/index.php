<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect("localhost", $username, $password,"restraunt");

// Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT * FROM foodmenu";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Delicious</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           <?php if(!isset($_SESSION['id'])){?> <a href="#about">Register/Login</a><?php  }  ?>
           
            <a href="#menu-list">Menu</a>
            <a href="#contact">Book a table</a>
            <a href="#menu-list">Order</a>
            <?php if(isset($_SESSION['id'])){?><a href='#message'>Messeges</a><?php  }  ?>
            <?php if(isset($_SESSION['id'])){?><a href='#message'>Order List</a><?php  }  ?>
           <?php if(isset($_SESSION['id'])){?><a href='logout.php'>Log out</a><?php  }  ?>
          </div>
          <!-- Use any element to open the sidenav -->                    
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">BiefChicken</h1>
            <h2>Food To fit your lifestyle & health.</h2>
            <p>Specialized in Bangladesh Cuisine!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <?php if(!isset($_SESSION['id'])){?>
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">New Member?</h1>
          <p class="header-p">Register Here And Get most of it  </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-12">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Register</h2>
              <div class="col-md-1"></div>
          <form action="register.php" method="post" role="form" class="contactForm">
            <?php if(isset($_GET['result'])&&$_GET['result']=='successfull'){ ?>
            <div><h3>Your Registration request has been sent. Thank you!</h3></div>
            <?php } else{?>
            <div id="errormessage"></div>
            <?php }?>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="name" id="date" placeholder="Your Name" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="location" id="time" placeholder="Your location" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="password" class="form-control label-floating is-empty" name="pass"  placeholder="password" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                
                
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
               <button type="submit" class="contacts-btn" name="submit">REGISTER</button>
              </div>
            </div>
          </form>
            </div>
          </div>
         
              <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Log In</h2>
              <div class="col-md-1"></div>

          <form action="login.php" method="post" role="form" class="contactForm">
           <div id="sendmessage">Your Registration request has been sent. Thank you!</div>
            <div id="errormessage"></div>
           <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="password" class="form-control label-floating is-empty" name="pass"  placeholder="password" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
               <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <div style="height: 160px;"></div>
               <button type="submit" class="contacts-btn" >login</button>
              </div>
            </div>
            </div>
            </div>
          </form>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <?php } ?>
  <!--/about-->
  <!-- event -->
 
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter" data-filter=".breakfast">Breakfast</a></li>
            <li><a class="filter" data-filter=".lunch">Lunch</a></li>
            <li><a class="filter" data-filter=".dinner">Dinner</a></li>
          </ul>
        </div>
           <?php
        while($row=mysqli_fetch_assoc($result)){
          ?>
        <div id="menu-wrapper">
          

          <div class="breakfast menu-restaurant">
            <span class="clearfix">

              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg" id="myBtn"><?php echo $row['name']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php echo$row['price']?>Tk</span>
            </span>
            <span class="menu-subtitle">Neque porro quisquam est qui dolorem</span>
          </div>
        </div>
        
      </div>
    </div>
  
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
     <div class="row">
      <div class="col-md-12 col-sm-12">
     <div class="col-md-8 col-sm-8">
    <img src="../images/<?php echo $row['pic']?>" width="400" height="600">
     </div>
     <div class="col-md-4 col-sm-4">
       <p><?php echo $row['name']?></p>
        <p><?php echo $row['price']?></p>
        <!--<p>description</p>-->
        <form action="cart.php?fid=<?php echo$row['fid'];?>" method="post">
          <input type="number" name="quan">
        <button type="submit" class="btn">Add to cart</button>
        </form>
       <?php if(isset($_SESSION['id'])){
           $id=$_SESSION['id'];
          $sql="SELECT message FROM message WHERE cid=$id";
          $result=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($result)){
           ?>
        <h3>MESSAGE</h3>
         <p><?php echo$row['message'];?></p>

        <?php } ?>
        <?php } ?>
     </div>

</div>
   <?php
}
?>

      
  </div>
  </div>
 
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  </section>
  <?php if(isset($_SESSION['id'])){?>
  <section id="message" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Messeges/Cart List</h1>
          <p class="header-p">Please Feel Free to order  </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-12">
          <div class="col-md-4 col-sm-4">
            <div class="about-info">
              <h2 class="heading">Messages</h2>
              <div class="col-md-1"></div>
               <?php 
               $id=$_SESSION['id'];
          $sql="SELECT message FROM message WHERE cid=$id";
          $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){?>
                <p><?php echo$row['message'];?></p>
                <?php } ?>
            </div>
          </div>
         
              <div class="col-md-8 col-sm-8">
            <div class="about-info">
              <h2 class="heading">cart list</h2>
              <div class="col-md-1"></div>
              <table class="table">
              <tr>
                <th>name</th>
                <th>quantiyt</th>
                <th>total</th>
              </tr>

         <?php 
           $id=$_SESSION['id'];
          $sql="SELECT * FROM foodmenu f NATURAL JOIN cart c WHERE c.fid=f.fid";
          $result=mysqli_query($conn,$sql);
          
          while($row=mysqli_fetch_assoc($result)){
           ?>
            
              <tr>
                  <td> <?php echo$row['name'];?> </td>
                  <td> <?php echo$row['quantity'];?> </td>
                  <td> <?php echo$row['totalprice'];?> </td>
                  <td><a href="order.php?id=<?php echo $row['cartid'];?>" class="btn" style="background-color: orange;" >Order</a></td>
              </tr>
              <?php } ?>
              </table>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <?php } ?>
  <!--/ menu -->

  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Book Your table</h1>
          <p class="header-p">Feel Free to book the table </p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Phone Booking</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00 - 03.00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="booktable.php" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
               <button type="submit" class="contacts-btn" >Book Table</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">BiefChicken</h4>
            <address>KhilGaon<br>Dhaka, 110013</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              © All Rights Reserved
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">Sumaiya Noorjahan</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
